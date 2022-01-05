<?php
session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>LocalHost | Lecture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/png" href="images/icon.png"/>
</head>

<body>
    <header class="indexHeader">
       <?php include "modules/header.php";
        $url="https://api.themoviedb.org/3/movie/".$_GET["title"]."movie?api_key=6f06ceaedfeefdbfdb4fd9007509a970&language=fr";
        $result=file_get_contents($url);
        $result=(array)json_decode($result);
        ?>
    </header>
    <main>
        <div class="lecturePageVideo">
            <img class="lecturePageImg" src="https://image.tmdb.org/t/p/w500<?php echo $result["backdrop_path"] ?>" alt="image">
            <div class="lectureTools">
                <ion-icon name="volume-high" class="lectureVolume"></ion-icon>
                <ion-icon name="play" id="play-button" class="lecturePlayVisible"></ion-icon>
                <ion-icon name="pause-outline" id="pause-button" class="lecturePauseHidden"></ion-icon>
                <ion-icon name="scan" class="lectureScan"></ion-icon>
            </div>
            <span class="lecturePageProgressBar"></span>
        </div>
        <div class="lecturePageInformations">
            
            <div class="lecturePageInformations_1">
                <h2><?php echo $result["title"] ?></h2>
                <p><?php echo $result["overview"] ?></p>
            </div>
            <div class="lecturePageInformations_2">    
                <br>
                <h3>Note Globale</h3>
                <div class="lectureNotation1">
                    <?php $rate = $result["vote_average"] / 2;
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
                <div class="divMaNote">
                    <h3>Ma note</h3>
                    <div class="lectureNotation2">
                        <form action="lectureTreatment.php" method="post" enctype="multipart/form-data">
                            <input id="inputRadio1" class="inputRadio" type="radio" name="rate" value=1 required="required">
                            <label for="inputRadio1" class="labelRadio"><ion-icon name="star-outline" class="etoile"></ion-icon></label>
                            <input id="inputRadio2" class="inputRadio" type="radio" name="rate" value=2 required="required">
                            <label for="inputRadio2" class="labelRadio"><ion-icon name="star-outline" class="etoile"></ion-icon></label>
                            <input id="inputRadio3" class="inputRadio" type="radio" name="rate" value=3 required="required">
                            <label for="inputRadio3" class="labelRadio"><ion-icon name="star-outline" class="etoile"></ion-icon></label>
                            <input id="inputRadio4" class="inputRadio" type="radio" name="rate" value=4 required="required">
                            <label for="inputRadio4" class="labelRadio"><ion-icon name="star-outline" class="etoile"></ion-icon></label>
                            <input id="inputRadio5" class="inputRadio" type="radio" name="rate" value=5 required="required">
                            <label for="inputRadio5" class="labelRadio"><ion-icon name="star-outline" class="etoile"></ion-icon></label>
                            <button type="submit" id="buttonSendRate">Envoyer</button>
                        </form>
                    </div>
            </div>
            </div>
            <div class="lecturePageInformations_3">
                <table>
                    <tr>
                        <td><b>Genre :</b></td>
                        <td><?php
                            $tmp=(array)$result["genres"][0];
                            echo $tmp["name"]?></td>
                    </tr>
                    <tr>
                        <td><b>Date de sortie :</b></td>
                        <td><?php echo $result["release_date"]?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="javascript/script.js"></script>
</body>
</html>