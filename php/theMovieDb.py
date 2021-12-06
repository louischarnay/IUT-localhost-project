import tmdbsimple as tmdb
import requests
import sys

param = sys.argv[1]

def getMovieInfo(movieTitle):
    
    tmdb.REQUESTS_SESSION = requests.Session()

    tmdb.API_KEY = '6f1c5d48646cdbc71d652ebcc488f3e0'
    tmdb.REQUESTS_TIMEOUT = 5
    search = tmdb.Search()

    response = search.movie(query=movieTitle)
    print(search.results[0]['original_title'])
    print(search.results[0]['vote_average'])
    print(search.results[0]['overview'])
    print('<a href = "https://image.tmdb.org/t/p/w500'+search.results[0]['poster_path']+'">lien image'+'</a>')
    print('<a href = "https://image.tmdb.org/t/p/w500'+search.results[0]['backdrop_path']+'">lien image'+'</a>')
    print(search.results[0]['release_date'])
    print(search.results[0]['genre_ids'])
    return search.results

getMovieInfo(param)

    #titre, overview,réalisateur, genre, date de sortie, acteurs, "note", image portrait, image paysage
    #https://image.tmdb.org/t/p/w500/ojDg0PGvs6R9xYFodRct2kdI6wC.jpg