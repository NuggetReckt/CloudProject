<?php
class Redirect
{
    function __construct()
    {
        ini_set("default_charset", "utf-8");

        require_once "page.php";
        require_once "requests.php";
    }

    public function redirectIfLogged(): bool
    {

        $req = new Requests("", "", "", "");

        $logged = "index.php";
        $not_logged = "login.php";

        if ($req->isLogged()) {
            header("Location: .$logged");
            echo "succès";
            return true;
        } else {
            header("Location: .$not_logged");
            echo "echec";
            return false;
        }
    }

    public function redirectIfRegistered(): bool
    {

        $req = new Requests("", "", "", "");

        $registered = "index.php";
        $not_registered = "register.php";

        if ($req->isRegistered()) {
            header("Location: .$registered");
            echo "succès";
            return true;
        } else {
            header("Location: .$not_registered");
            echo "echec";
            return false;
        }
    }
}