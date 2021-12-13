<?php
session_start();
include "class/Db.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalHost | Profil</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body class="connexionBody">
<header class="indexHeader">
    <?php include "modules/header.php"?>
</header>
<main class="profilMain">
    <div class="profilAjouter profilUsers">
        <?php $db = new Db();
        $users = $db->getUsersFromAccountId($_SESSION["connectedId"]);
        foreach ($users as $value){?>
            <div class="profilUser">  
            <p class='username'><?php echo $value["username"]?></p>
                <form action="connectUserTreatment.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="username" value="<?php echo $value["username"]?>">
                    <button type="submit">Connexion</button>
                </form>
                <form action="supprUserTreatment.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="username" value="<?php echo $value["username"]?>">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        <?php } unset($value)?>
    </div>
    <div class="profilAjouter">
        <form action="addUserTreatment.php" method="post" enctype="multipart/form-data">
            <label for="newUser">Ajouter un membre</label>
            <div class="divAjoutUser">
                <input type="test" name="newUser" id="newUser" required="required">
                <button type="submit">Ajouter</button>
            </div>
        </form>
    </div>
</main>
<footer class="indexFooter">
    <?php include "modules/footer.php"?>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>