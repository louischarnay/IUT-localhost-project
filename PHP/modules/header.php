<div class="indexHeaderDiv">
        <div class="indexLogo">
            <a href="index.php">
                <ion-icon name="diamond-outline"></ion-icon>
            </a>
        </div>
        <div class="indexTitre">
            <a href="index.php">
                <h1>LocalHost</h1>
            </a>
        </div>
        <div class="indexDivBoutons">
            <a href="/profil.php" class="indexBoutonMenu">Profil</a>
            <?php if(isset($_SESSION["connectedId"])):?>
            <a href="/deconnexion.php" class="indexBoutonMenu">Déconnexion</a>
            <?php else:?>
            <a href="/connexion.php" class="indexBoutonMenu">Connexion</a>
            <?php endif?>
            <a href="/inscription.php" class="indexBoutonMenu">Rechercher</a>
        </div>
    </div>
    <div class="indexInput">
        <input type="text" placeholder="Rechercher">
    </div>