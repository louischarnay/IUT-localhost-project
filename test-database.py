from surprise import SVD
from surprise import Dataset
from surprise import Reader
from surprise.model_selection import cross_validate

# path to dataset file
file_path = 'ratings.dat'

reader = Reader(line_format='user item rating timestamp', sep=',')

data = Dataset.load_from_file(file_path, reader=reader)

trainset = data.build_full_trainset()

# We'll use the famous SVD algorithm.
algo = SVD()

# Train the algorithm on the trainset, and predict ratings for the testset
algo.fit(trainset)


# Then compute RMSE
#accuracy.rmse(predictions)
# We can now use this dataset as we please, e.g. calling cross_validate
#cross_validate(BaselineOnly(), data, verbose=True)