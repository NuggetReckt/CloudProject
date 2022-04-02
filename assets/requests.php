<?php

class Requests
{
    function __construct($username, $email, $password, $password_confirm)
    {
        ini_set('default_charset', 'utf-8');

        require_once "database.php";

        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->password_confirm = $password_confirm;

    }

    function insert()
    {
        if (isset($_GET["nom"]) && isset($_GET["email"]) && isset($_GET["password"]) && isset($_GET["password_confirm"])) {
            $nom = $_GET["nom"];
            $email = $_GET["email"];
            $password = $_GET["password"];
            $password_confirm = $_GET["password_confirm"];

            if ($password != $password_confirm) {
                echo "Vos deux mots de passes doivent être indentiques.";
                return;
            }

            $req = mysqli_query($link, "INSERT INTO user(nom,email,password) VALUES ('$nom','$email','$password')");

            echo "Compte créé";
        }
    }

    function login()
    {
        if (isset($this->email) && isset($this->password)) {
            $email = $this->email;
            $password = $this->password;

            $req = mysqli_query($link, "SELECT * FROM user WHERE email='$email'");

            while ($row = mysqli_fetch_assoc($req)) {
                $paswd = $row['passwd'];
            }

            if ($password == $paswd) {
                echo "Mot de passe est correct.";
            } else {
                echo "Mot de passe incorrect.";
            }
        }
    }

    function isLogged(): bool
    {

        return true;
    }

    function isRegistered(): bool
    {
        $email = $this->email;

        $req = mysqli_query($link, "SELECT email FROM user WHERE email='$email'");

        if ($req == $email) {
            echo "Un compte à déjà été enregistré avec cet email.";
        }
        return true;
    }
}