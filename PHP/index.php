<?php
session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalHost | Index</title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="icon" type="image/png" href="images/icon.png"/>
</head>
<body>
<header class="indexHeader">
    <?php include "modules/header.php"?>
</header>
<?php if(!isset($_GET["searchedMovie"])):?>
<main class="indexMain">
    <div class="indexRecommandation">
            <a href="lecture.php"><img src="https://picsum.photos/180/240" alt="affiche film recommandé" class="indexAfficheFilmRecommande"></a>
        <div class="indexDescriptionFilm">
            <div class="indexH2Etoiles">
                <h2>RECOMMANDE</h2>
                <div class="indexEtoilesH2">
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                </div>
            </div>
            <div class="indexTexteRecommande">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur at consequatur deserunt dignissimos
                        dolore eius in modi molestiae nesciunt non obcaecati officia optio, placeat quas qui quia quo repellat
                        temporibus unde vitae voluptas voluptatibus voluptatum! Cumque deserunt dicta error fuga fugiat illum modi
                        mollitia. Aliquid dolorum iure maxime modi sapiente.
                    </p>
            </div>
        </div>
    </div>
    <div class="indexCategorie">
        <div class="indexH3Etoile">
            <h3>CATEGORIE 1</h3>
            <div class="indexEtoiles">
                <ion-icon name="star" class="etoile"></ion-icon>
                <ion-icon name="star" class="etoile"></ion-icon>
                <ion-icon name="star" class="etoile"></ion-icon>
                <ion-icon name="star" class="etoile"></ion-icon>
                <ion-icon name="star-outline" class="etoile"></ion-icon>
            </div>
        </div>
        <div class="indexLigneCategorie">
            <div class="indexLigneFilms">
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
            </div>
        </div>
    </div>
    <div class="indexCategorie">
        <div class="indexH3Etoile">
            <h3>CATEGORIE 2</h3>
            <div class="indexEtoiles">
                <ion-icon name="star" class="etoile"></ion-icon>
                <ion-icon name="star" class="etoile"></ion-icon>
                <ion-icon name="star" class="etoile"></ion-icon>
                <ion-icon name="star-outline" class="etoile"></ion-icon>
                <ion-icon name="star-outline" class="etoile"></ion-icon>
            </div>
        </div>
        <div class="indexLigneCategorie">
            <div class="indexLigneFilms">
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
                <a href="lecture.php" class="image"><img src="https://picsum.photos/120/160" alt="affiche film" class="indexAfficheFilm"></a>
            </div>
        </div>
    </div>
</main>
<?php else:
    $url="https://api.themoviedb.org/3/search/movie?api_key=6f06ceaedfeefdbfdb4fd9007509a970&language=fr&query=".$_GET["searchedMovie"];
    $result=file_get_contents($url);
    $vars=json_decode($result);
    var_dump($vars);
    ?>
<main class="indexMain">
    <div class="indexRecommandation">
        <a href="lecture.php"><img src="https://picsum.photos/180/240" alt="affiche film recommandé" class="indexAfficheFilmRecommande"></a>
        <div class="indexDescriptionFilm">
            <div class="indexH2Etoiles">
                <h2>RECOMMANDE</h2>
                <div class="indexEtoilesH2">
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                </div>
            </div>
            <div class="indexTexteRecommande">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur at consequatur deserunt dignissimos
                    dolore eius in modi molestiae nesciunt non obcaecati officia optio, placeat quas qui quia quo repellat
                    temporibus unde vitae voluptas voluptatibus voluptatum! Cumque deserunt dicta error fuga fugiat illum modi
                    mollitia. Aliquid dolorum iure maxime modi sapiente.
                </p>
            </div>
        </div>
    </div>
</main>
<?php endif?>
<footer class="indexFooter">
   <?php include "modules/footer.php"?>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>