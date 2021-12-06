<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalHost | Inscription</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body class="connexionBody">
<header class="indexHeader">
    <?php include "modules/header.php"?>
</header>
<main>
    <div class="connexionMain">
        <h2>Inscription</h2>
        <form action="inscriptionTraitement.php">
            <label for="username">Email</label>
            <input type="text" id="username">
            <label for="password">Mot de passe</label>
            <input type="text" id="password">
            <label for="password">Confirmer le mot de passe</label>
            <input type="text" id="passwordConfirm">
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
