<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";

$page = new Page("Login", "CloudProject");

$page->setTitle();

$req = new Requests($_GET["name"], $_GET["email"], $_GET["password"], $_GET["password_confirm"]);
?>

<form action="<?php echo"assets/request.php"?>" method="GET">
    <fieldset>
        <h1>Connexion</h1>
        <label>Email</label><br>
        <input type="email" name="email" placeholder=" Votre Email">
        <br>
        <label>Mot de passe</label><br>
        <input type="password" name="passwd" placeholder=" Votre mot de passe">
        <br>
        <input type="submit" value="Valider">
    </fieldset>
    <p class="footer">Vous n'avez pas de compte ? <a href="<?php echo"register.php"?>">Inscrivez-vous ici</a></p>
</form>
