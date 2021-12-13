<?php
session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalHost | Inscription</title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="icon" type="image/png" href="images/icon.png"/>
</head>
<body class="connexionBody">
<header class="indexHeader">
    <?php include "modules/header.php"?>
</header>
<main>
    <div class="connexionMain">
        <h2>Inscription</h2>
        <form action="inscriptionTreatment.php" method="post" enctype="multipart/form-data">
            <label for="username">Email</label>
            <input type="email" id="username" name="username" required="required">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required="required">
            <label for="passwordConfirm">Confirmer le mot de passe</label>
            <input type="password" id="passwordConfirm" name="passwordConfirm" required="required">
            <button type="submit">Inscription</button>
        </form>
    </div>
</main>
<footer class="indexFooter">
    <?php include "modules/footer.php"?>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>
