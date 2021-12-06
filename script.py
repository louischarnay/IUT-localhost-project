from collections import defaultdict

from surprise import SVD
from surprise import Dataset
from surprise import Reader
from surprise.model_selection import GridSearchCV

def get_top_n(predictions, n=10):
    """Return the top-N recommendation for each user from a set of predictions.

    Args:
        predictions(list of Prediction objects): The list of predictions, as
            returned by the test method of an algorithm.
        n(int): The number of recommendation to output for each user. Default
            is 10.

    Returns:
    A dict where keys are user (raw) ids and values are lists of tuples:
        [(raw item id, rating estimation), ...] of size n.
    """

    # First map the predictions to each user.
    top_n = defaultdict(list)
    for uid, iid, true_r, est, _ in predictions:
        top_n[uid].append((iid, est))

    # Then sort the predictions for each user and retrieve the k highest ones.
    for uid, user_ratings in top_n.items():
        user_ratings.sort(key=lambda x: x[1], reverse=True)
        top_n[uid] = user_ratings[:n]

    return top_n


# First train an SVD algorithm on the movielens dataset.

file_path = 'ratings.csv'

reader = Reader(line_format='user item rating timestamp', sep=',')

print("loading file")
data = Dataset.load_from_file(file_path, reader=reader)

param_grid = {'n_epochs': [10,15], 'lr_all': [0.005,0.007],
              'reg_all': [0.2,0.4]}
gs = GridSearchCV(SVD, param_grid, measures=['rmse', 'mae'])

gs.fit(data)

# best RMSE score
print(gs.best_score['rmse'])

# combination of parameters that gave the best RMSE score
print(gs.best_params['rmse'])

algo = gs.best_estimator['rmse']
algo.fit(data.build_full_trainset())

#trainset = data.build_full_trainset()
#algo = SVD()
#algo.fit(trainset)

# Than predict ratings for all pairs (u, i) that are NOT in the training set.
print("training...")
testset = data.build_full_trainset().build_anti_testset()
predictions = algo.test(testset)

top_n = get_top_n(predictions, n=20)

# Print the recommended items for each user
file=open("recommendation.csv",'w')

for uid, user_ratings in top_n.items():
    file.write(uid + str([iid for (iid, _) in user_ratings]) + '\n')
    print(uid, [iid for (iid, _) in user_ratings])

file.close()