<?php
session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>LocalHost | Lecture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header class="indexHeader">
       <?php include "modules/header.php"?>
    </header>
    <main>
        <div class="lecturePageVideo">
            <img class="lecturePageImg" src="https://picsum.photos/1280/720" alt="image">
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
                <h2>TITRE FILM</h2>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi obcaecati alias itaque dolorum quibusdam excepturi modi nemo sequi nihil odit nisi consequatur numquam, esse assumenda sit aspernatur nam quis quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt incidunt eaque hic odio iusto accusamus quia dolorem quo. Recusandae necessitatibus ut a delectus animi quos labore quod temporibus illo minus!</p>
            </div>
            <div class="lecturePageInformations_2">    
                <br>
                <h3>Note Globale</h3>
                <div class="lectureNotation1">
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                    <ion-icon name="star" class="etoile"></ion-icon>
                </div>
                <div class="divMaNote">
                    <h3>Ma note</h3>
                    <div class="lectureNotation2">
                        <form action="lectureTreatment.php" method="post" enctype="multipart/form-data">
                            <input id="inputRadio1" class="inputRadio" type="radio" name="rate" value="1">
                            <label for="inputRadio1"><ion-icon name="star" class="etoile"></ion-icon></label>
                            <input id="inputRadio2" class="inputRadio" type="radio" name="rate" value="2">
                            <label for="inputRadio2"><ion-icon name="star" class="etoile"></ion-icon></label>
                            <input id="inputRadio3" class="inputRadio" type="radio" name="rate" value="3">
                            <label for="inputRadio3"><ion-icon name="star" class="etoile"></ion-icon></label>
                            <input id="inputRadio4" class="inputRadio" type="radio" name="rate" value="4">
                            <label for="inputRadio4"><ion-icon name="star" class="etoile"></ion-icon></label>
                            <input id="inputRadio5" class="inputRadio" type="radio" name="rate" value="5">
                            <label for="inputRadio5"><ion-icon name="star" class="etoile"></ion-icon></label>
                            <button type="submit" id="buttonSendRate">Envoyer</button>
                        </form>
                    </div>
            </div>
            </div>
            <div class="lecturePageInformations_3">
                <table>
                    <tr>
                        <td><b>Réalisateur :</b></td>
                        <td>Mr Réalisateur</td>
                    </tr>
                    <tr>
                        <td><b>Genre :</b></td>
                        <td>Genre</td>
                    </tr>
                    <tr>
                        <td><b>Date de sortie :</b></td>
                        <td>19 octobre 2021</td>
                    </tr>
                    <tr>
                        <td><b>Acteurs :</b></td>
                        <td>Acteur 1</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Acteur 2</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Acteur 3</td>
                    </tr>
                </table>
            </div>
        </div>
    </main> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="javascript/script.js"></script>
</body>
</html>