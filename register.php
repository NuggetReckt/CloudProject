<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";

$page = new Page("Register", "CloudProject");

$page->setHeader();
$page->setTitle();
?>

    <form action="<?php echo "assets/requests.php" ?>" method="POST">
        <fieldset>
            <div class="form-content">
                <h1>Register</h1>
                <label>Name<br>
                    <input type="text" name="name" placeholder="please enter your name">
                </label>
                <br>
                <label>Email<br>
                    <input type="email" name="email" placeholder="please enter your email">
                </label>
                <br>
                <label>Password<br>
                    <input type="password" name="password" placeholder="please enter your password">
                </label>
                <br>
                <label>Confirm password</label><br>
                <input type="password" name="password_confirm" placeholder="please confirm your password">
                <br>
                <input type="submit" value="Register">
                <br>
                <p id="cgu">By clicking on the button "Register", you accept our <a href="#">Terms of use</a>.</p>
            </div>
        </fieldset>
        <p class="footer">Already have an account? <a href="<?php echo "login.php" ?>">Connect here</a></p>
    </form>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {
    $req = new Requests($_POST["name"], $_POST["email"], $_POST["password"], $_POST["password_confirm"]);
}

$page->setFooter();
?>