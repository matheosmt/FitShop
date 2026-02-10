<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription - FitShop</title>
    <link rel="stylesheet" href="css/inscription.css">
</head>
<body>

<div id="header"></div>

<section class="register-section">
    <div class="register-container">
        <h2>Créer un compte</h2>
        <form method="post" action="traitement_inscription.php">
            <label for="nom">Nom complet</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom complet" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Votre email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>

            <label for="password_confirm">Confirmer le mot de passe</label>
            <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmez votre mot de passe" required>

            <button type="submit" name="inscription">S'inscrire</button>
        </form>

        <p>Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous ici</a></p>
    </div>
</section>

<div id="footer"></div>

<script src="js/app.js"></script>
</body>
</html>
