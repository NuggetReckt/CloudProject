<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";

$page = new Page("Register", "CloudProject");

$page->setHeader();
$page->setTitle();
?>

    <form action="<?php echo "assets/requests.php" ?>" method="POST">
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
            <p id="cgu">En Cliquant sur le bouton "S'inscrire", vous acceptez de vous conformer a nos<br><a href="#">Conditions
                    d'Utilisation</a>.</p>
        </fieldset>
        <p class="footer">Vous avez deja un compte ? <a href="<?php echo "login.php" ?>">Connectez-vous ici</a></p>
    </form>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {
    $req = new Requests($_POST["name"], $_POST["email"], $_POST["password"], $_POST["password_confirm"]);
}

$page->setFooter();
?>