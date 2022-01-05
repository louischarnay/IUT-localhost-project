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
<?php if(!isset($_GET["searchedMovie"])):
    $fullResults = get_top_n_recommandation(5)?>
<main class="indexMain">
    <div class="indexRecommandation">
            <a href="lecture.php?title=<?php echo $fullResults["1"]["id"]?>"><img src="<?php echo $fullResults[1]["imagePortrait"] ?>" alt="affiche film recommandé" class="indexAfficheFilmRecommande"></a>
        <div class="indexDescriptionFilm">
            <div class="indexH2Etoiles">
                <h2><?php echo $fullResults[1]["title"]?></h2>
                <div class="indexEtoilesH2">
                    <?php $rate = $fullResults[1]["averageNote"] / 2;
                    if($rate >=0.5):?>
                        <ion-icon name="star" class="etoile"></ion-icon>
                    <?php else:?>
                        <ion-icon name="star-outline" class="etoile"></ion-icon>
                    <?php endif;
                    if($rate >=1.5):?>
                        <ion-icon name="star" class="etoile"></ion-icon>
                    <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon> <?php endif;
                    if($rate >=2.5):?>
                        <ion-icon name="star" class="etoile"></ion-icon>
                    <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon> <?php endif;
                    if($rate >=3.5):?>
                        <ion-icon name="star" class="etoile"></ion-icon>
                    <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon> <?php endif;
                    if($rate >=4.5):?>
                        <ion-icon name="star" class="etoile"></ion-icon>
                    <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon>
                    <?php endif?>
                </div>
            </div>
            <div class="indexTexteRecommande">
                    <p><?php echo $fullResults[1]["description"]?></p>
            </div>
        </div>
    </div>
    <div class="indexCategorie">
        <div class="indexH3Etoile">
            <h3>VOS FILMS RECOMMANDES</h3>
            <div class="indexEtoiles">
                <?php $rate = 0;
                for($cpt=2; $cpt < 11; $cpt++) {
                    $rate += $fullResults[$cpt]["averageNote"];
                }
                $rate = $rate / 18;
                if($rate >=0.5):?>
                    <ion-icon name="star" class="etoile"></ion-icon>
                <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon>
                <?php endif;
                if($rate >=1.5):?>
                    <ion-icon name="star" class="etoile"></ion-icon>
                <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon> <?php endif;
                if($rate >=2.5):?>
                    <ion-icon name="star" class="etoile"></ion-icon>
                <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon> <?php endif;
                if($rate >=3.5):?>
                    <ion-icon name="star" class="etoile"></ion-icon>
                <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon> <?php endif;
                if($rate >=4.5):?>
                    <ion-icon name="star" class="etoile"></ion-icon>
                <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon>
                <?php endif?>
            </div>
        </div>
        <div class="indexLigneCategorie">
            <div class="indexLigneFilms">
                <?php for($cpt=2; $cpt < 11; $cpt++):?>
                <a href="lecture.php?title=<?php echo $fullResults[$cpt]['id']?>" class="image"><img src="<?php echo $fullResults[$cpt]["imagePortrait"] ?>" alt="affiche film" class="indexAfficheFilm"></a>
            <?php endfor?>
            </div>
        </div>
    </div>
    <div class="indexCategorie">
        <div class="indexH3Etoile">
            <h3>ILS PEUVENT AUSSI VOUS PLAIRE</h3>
            <div class="indexEtoiles">
                <?php $rate = 0;
                for($cpt=11; $cpt < 20; $cpt++) {
                    $rate += $fullResults[$cpt]["averageNote"];
                }
                $rate = $rate / 18;
                if($rate >=0.5):?>
                    <ion-icon name="star" class="etoile"></ion-icon>
                <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon>
                <?php endif;
                if($rate >=1.5):?>
                    <ion-icon name="star" class="etoile"></ion-icon>
                <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon> <?php endif;
                if($rate >=2.5):?>
                    <ion-icon name="star" class="etoile"></ion-icon>
                <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon> <?php endif;
                if($rate >=3.5):?>
                    <ion-icon name="star" class="etoile"></ion-icon>
                <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon> <?php endif;
                if($rate >=4.5):?>
                    <ion-icon name="star" class="etoile"></ion-icon>
                <?php else:?>
                    <ion-icon name="star-outline" class="etoile"></ion-icon>
                <?php endif?>
            </div>
        </div>
        <div class="indexLigneCategorie">
            <div class="indexLigneFilms">
                <?php for($cpt=11; $cpt < 20; $cpt++): ?>
                    <a href="lecture.php?title=<?php echo $fullResults[$cpt]["id"]?>" class="image"><img src="<?php echo $fullResults[$cpt]["imagePortrait"] ?>" alt="affiche film" class="indexAfficheFilm"></a>
                <?php endfor?>
            </div>
        </div>
    </div>
</main>
<?php else:
    $url="https://api.themoviedb.org/3/search/movie?api_key=6f06ceaedfeefdbfdb4fd9007509a970&language=fr&query=".$_GET["searchedMovie"];
    $result=file_get_contents($url);
    $vars=(array)json_decode($result);
    $result=(array)$vars["results"][0];
    ?>
<main class="indexMain">
    <div class="indexRecommandation">
        <a href="lecture.php?title=<?php echo $result['id']?>"><img src="https://image.tmdb.org/t/p/w500//<?php echo $result["poster_path"]?>" alt="affiche film recommandé" class="indexAfficheFilmRecommande"></a>
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
                <p><?php echo $result["overview"]?>
                </p>
            </div>
        </div>
    </div>
    <div class="indexCategorie">
        <div class="indexH3Etoile">
        </div>
        <div class="indexLigneCategorie">
            <div class="indexLigneFilms">
                <?php
                for($cpt = 1; $cpt < sizeof($vars["results"]); $cpt++):
                    $tmp = (array)$vars["results"][$cpt];
                    $tmp2 = (array)$vars["results"]["0"];
                    $tmp2=(string)$tmp["id"];?>
                <a href="lecture.php?title=<?php echo $tmp["id"]?>" class="image"><img src="https://image.tmdb.org/t/p/w500/<?php echo $tmp["poster_path"]?>" alt="affiche film" class="indexAfficheFilm"></a>
                <?php endfor?>
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