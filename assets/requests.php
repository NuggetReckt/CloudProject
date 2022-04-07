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

    function login()
    {
        if (isset($this->email) && isset($this->password)) {
            $email = $this->email;
            $password = $this->password;

            $req = mysqli_query($link, "SELECT * FROM user WHERE email='$email'");

            while ($row = mysqli_fetch_assoc($req)) {
                $paswd = $row['passwd'];
            }
v
            if ($password == $paswd) {
                echo "Mot de passe est correct.";

                $this->isLogged();
            } else {
                echo "Mot de passe incorrect.";
            }
        }
    }

    function insert()
    {
        if (isset($this->username) && isset($this->email) && isset($this->password) && isset($this->password_confirm)) {
            $name = $this->username;
            $email = $this->email;
            $password = $this->password;
            $password_confirm = $this->password_confirm;

            if ($password != $password_confirm) {
                echo "Vos deux mots de passes doivent être indentiques.";
                return;
            }

            $req = mysqli_query($link, "INSERT INTO user(name,email,password) VALUES ('$name','$email','$password')");

            echo "Compte créé";

            $this->isRegistered();

            $this->login($this->email, $this->password);
        }
    }

    function isRegistered(): bool
    {
        $email = $this->email;

        $req = mysqli_query($link, "SELECT email FROM user WHERE email='$email'");

        if ($req == $email) {
            echo "Un compte à déjà été enregistré avec cet email.";
            return false;
        }
        return true;
    }

    function isLogged(): bool
    {
        if ("CONDITION") {
            echo "Vous êtes déjà connecté.";
            return false;
        }
        return true;

    }
}