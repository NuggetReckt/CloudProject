<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";
require_once "./assets/redirect.php";

$page = new Page("Login", "CloudProject");

$page->setHeader();
$page->setTitle();
?>

    <form action="<?php echo "login.php" ?>" method="POST" class="user-form">
        <fieldset>
            <div class="form-content">
                <h1>Connection</h1>
                <label>Email<br>
                    <input type="email" name="email" class="input" placeholder="enter your email" required="">
                </label>
                <br>
                <label>Password<br>
                    <input type="password" name="password" class="input" placeholder="enter your password" required="">
                </label>
                <br>
                <input type="submit" value="Login">
            </div>
        </fieldset>
        <p class="footer">Not registered? <a href="<?php echo "register.php" ?>">Create an account here</a></p>
    </form>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {

    $req = new Requests($_POST["name"], $_POST["email"], $_POST["password"], $_POST["password_confirm"]);

    $redirect = new Redirect();
    $redirect->redirectIfLogged();
}

$page->setFooter();
?>