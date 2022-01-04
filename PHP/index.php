<?php
session_start();
include "get_top_n_recommandation.php"?>
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
<?php
    if(!isset($_GET["searchedMovie"])):
         $fullResults = get_top_n_recommandation(21); ?>
<main class="indexMain">
    <div class="indexRecommandation">
            <a href="lecture.php?title=<?php echo formalizeTitle($fullResults[1]["title"]); ?>"><img src="<?php echo $fullResults[1]["imagePortrait"]?>" alt="affiche film recommandé" class="indexAfficheFilmRecommande"></a>
        <div class="indexDescriptionFilm">
            <div class="indexH2Etoiles">
                <h2><?php echo $fullResults[1]["title"]?></h2>
                <div class="indexEtoilesH2">
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                </div>
            </div>
            <div class="indexTexteRecommande">
                    <p><?php echo $fullResults[1]["description"]?>
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
                <?php
                $imageLink = get_top_n_picture(50);
                for ($i = 2; $i < count($imageLink);$i++){
                    echo '<a href="lecture.php?title='.formalizeTitle($fullResults[$i]["title"]).'" class="image"><img src="'.$imageLink[$i]["imagePortrait"].'" alt="affiche film" class="indexAfficheFilm"></a>';

                }
                ?>
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
                <?php
                $imageLink = get_top_n_picture(20);
                for ($i = 2; $i < count($imageLink);$i++){
                    echo '<a href="lecture.php" class="image"><img src="'.$imageLink[$i]["imagePortrait"].'" alt="affiche film" class="indexAfficheFilm"></a>';

                }
                ?>
            </div>
        </div>
    </div>
</main>
<?php else:
        $result = getMovieInfo($_GET["searchedMovie"]);

    ?>
<main class="indexMain">
    <div class="indexRecommandation">
        <a href="lecture.php?title=<?php echo $result["title"]?>"><img src="https://image.tmdb.org/t/p/w500//<?php echo $result["imagePortrait"]?>" alt="affiche film recommandé" class="indexAfficheFilmRecommande"></a>
        <div class="indexDescriptionFilm"><!--180/240-->
            <div class="indexH2Etoiles">
                <h2><?php echo $result["title"]?></h2>
                <!--<div class="indexEtoilesH2">
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                </div>-->
            </div>
            <div class="indexTexteRecommande">
                <p><?php echo $result["description"]?>
                </p>
            </div>
        </div>
    </div>
    <!--<div class="indexCategorie">
        <div class="indexH3Etoile">
        </div>
        <div class="indexLigneCategorie">
            <div class="indexLigneFilms">
                <?php
/*                for($cpt = 1; $cpt < sizeof($result); $cpt++):
                    $tmp = (array)$vars["results"][$cpt];
                    $tmp2 = (array)$vars["results"]["0"];
                    $tmp2=(string)$tmp["id"];*/?>
                <a href="lecture.php?title=<?php /*/*echo $tmp["id"]*/?>" class="image"><img src="https://image.tmdb.org/t/p/w500/<?php /*/*echo $tmp["poster_path"]*/?>" alt="affiche film" class="indexAfficheFilm"></a>
                <?php /*/*endfor*/?>
            </div>
        </div>
    </div>-->
</main>
<?php endif?>
<footer class="indexFooter">
   <?php include "modules/footer.php"?>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>