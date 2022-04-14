<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";

$page = new Page("Login", "CloudProject");

$page->setHeader();
$page->setTitle();
?>

    <form action="<?php echo "assets/requests.php" ?>" method="POST">
        <fieldset>
            <h1>Connexion</h1>
            <label>Email</label><br>
            <input type="email" name="email" placeholder=" Votre Email">
            <br>
            <label>Mot de passe</label><br>
            <input type="password" name="password" placeholder=" Votre mot de passe">
            <br>
            <input type="submit" value="Valider">
        </fieldset>
        <p class="footer">Vous n'avez pas de compte ? <a href="<?php echo "register.php" ?>">Inscrivez-vous ici</a></p>
    </form>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {
    $req = new Requests($_POST["name"], $_POST["email"], $_POST["password"], $_POST["password_confirm"]);
}

$page->setFooter();
?>