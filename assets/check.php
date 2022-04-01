<?php
class Check {
    function __construct($email, $password) {
        ini_set('default_charset', 'utf-8');

        require_once "database.php";

        $this->email = $email;
        $this->password = $password;
    }

    function login() {
        if (isset($this->email) && isset($this->password)) {

            $this->email = $_GET["email"];
            $this->password = $_GET["password"];

            $req = mysqli_query($link, "SELECT * FROM user WHERE email='$this->email'");

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