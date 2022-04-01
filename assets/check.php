<?php
class Check {
    function __construct($link, $email, $password) {
        ini_set('default_charset', 'utf-8');

        require_once "database.php";

        $this->link = $link;
        $this->email = $email;
        $this->password = $password;
    }

    function login() {
        if (isset($_GET["email"]) && isset($_GET["password"])) {

            $this->email = $_GET["email"];
            $this->password = $_GET["password"];

            $req = mysqli_query($this->link, "SELECT * FROM user WHERE email='$this->email'");

            while ($row = mysqli_fetch_assoc($req)) {
                $paswd = $row['passwd'];
            }

            if ($this->password == $paswd) {
                echo "Mot de passe est correct.";
            } else {
                echo "Mot de passe incorrect.";
            }
        }
    }

    function isLogged() {

    }
}