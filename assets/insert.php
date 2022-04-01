<?php

class Insert {
    function __construct($email, $password, $password_confirm) {
        ini_set('default_charset', 'utf-8');

        require_once "database.php";

        $this->email = $email;
        $this->password = $password;
        $this->password_confirm = $password_confirm;

    }

    function createAccount() {
        if (isset($_GET["nom"]) && isset($_GET["email"]) && isset($_GET["password"]) && isset($_GET["password_confirm"])) {
            $nom = $_GET["nom"];
            $email = $_GET["email"];
            $password = $_GET["password"];
            $password_confirm = $_GET["password_confirm"];

            if ($password != $password_confirm) {
                echo "Vos deux mots de passes doivent être indentiques.";
                return;
            }

            $req = mysqli_query($link, "INSERT INTO user(nom,prenom,email,passwd) VALUES ('$nom','$email','$password')");

            echo "Compte créé";
        }
    }
}