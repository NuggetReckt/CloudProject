<?php

class Redirect
{
    function __construct()
    {
        ini_set("default_charset", "utf-8");

        require_once "page.php";
        require_once "requests.php";
    }

    function main()
    {

        $req = new Requests("", "", "", "");

        $logged = "index.php";
        $not_logged = "login.php";
        $not_registered = "register.php";

        if ($req->isLogged()) {
            header("Location: .$logged");
        } else {
            header("Location: .$not_logged");
        }

        if ($req->isRegistered()) {
            header("Location: .$logged");
        } else {
            header("Location: .$not_registered");
        }
        die();
    }
}