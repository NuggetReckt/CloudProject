<?php
require_once "./assets/page.php";
require_once "./assets/database/requests.php";
require_once "./assets/redirect.php";

$page = new Page("Register", "CloudProject");

$page->setHeader();
?>

    <form action="<?php echo "register.php" ?>" method="POST" class="user-form">
        <fieldset>
            <div class="form-content">
                <h1>Register</h1>
                <label>Username<br>
                    <input type="text" name="name" class="input" placeholder="please enter your username" required="">
                </label>
                <br>
                <label>Email<br>
                    <input type="email" name="email" class="input" placeholder="please enter your email" required="">
                </label>
                <br>
                <label>Password<br>
                    <input type="password" name="password" class="input" placeholder="please enter your password"
                           required="">
                </label>
                <br>
                <label>Confirm password<br>
                    <input type="password" name="password_confirm" class="input"
                           placeholder="please confirm your password" required="">
                </label>
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

    $req = new Requests($_POST["name"], $_POST["email"], $_POST["password"], $_POST["password_confirm"], "");

    $redirect = new Redirect();
    $redirect->redirectIfRegistered();
}

$page->setFooter();
?>