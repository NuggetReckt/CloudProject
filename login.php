<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";

$page = new Page("Login", "CloudProject");

$page->setHeader();
$page->setTitle();
?>

    <form action="<?php echo "assets/requests.php" ?>" method="POST">
        <fieldset>
            <div class="form-content">
                <h1>Connection</h1>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="enter your email">
                <br>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="enter your password">
                <br>
                <input type="submit" value="Login">
            </div>
        </fieldset>
        <p class="footer">Not registered? <a href="<?php echo "register.php" ?>">Create an account here</a></p>
    </form>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {
    $req = new Requests($_POST["name"], $_POST["email"], $_POST["password"], $_POST["password_confirm"]);
}

$page->setFooter();
?>