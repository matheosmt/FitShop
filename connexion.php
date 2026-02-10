<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - FitShop</title>
    <link rel="stylesheet" href="css/connexion.css">
</head>
<body>

<div id="header"></div>

<section class="login-section">
    <div class="login-container">
        <h2>Connexion à votre compte</h2>
        <form method="post" action="traitement_connexion.php">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>

            <button type="submit" name="connexion">Se connecter</button>
        </form>

        <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous ici</a></p>
    </div>
</section>

<div id="footer"></div>

<script src="js/app.js"></script>

</body>
</html>
