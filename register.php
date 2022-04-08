<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";

$page = new Page("Register", "CloudProject");

$page->setTitle();

$req = new Requests($_GET["name"], $_GET["email"], $_GET["password"], $_GET["password_confirm"]);
?>

<form action="<?php echo"assets/request.php"?>" method="GET">
    <fieldset>
        <h1>Inscription</h1>
        <label>Nom</label><br>
        <input type="text" name="name" placeholder="Votre Nom">
        <br>
        <label>Email</label><br>
        <input type="email" name="email" placeholder="Votre Email">
        <br>
        <label>Mot de passe</label><br>
        <input type="password" name="password" placeholder="Votre mot de passe">
        <br>
        <label>Confirmer le mot de passe</label><br>
        <input type="password" name="password_confirm" placeholder="Confirmez votre mot de passe">
        <br>
        <input type="submit" value="S'inscrire">
        <br>
        <p id="cgu">En Cliquant sur le bouton "S'inscrire, vous acceptez de vous conformer aux <a href="#">Conditions
                d'Utilisation</a> ainsi que notre <a href="#">Politique de confidentialité</a></p>
    </fieldset>
    <p class="footer">Vous avez déjà un compte ? <a href="<?php echo"login.php"?>">Connectez-vous ici</a></p>
</form>