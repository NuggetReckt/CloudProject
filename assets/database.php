<?php
$user = "root";
$mdp = "root";
$db = "testdb";
$server = "localhost";

$link = mysqli_connect($server, $user, $mdp, $db);

if ($link) {
    echo "connexion établie";
} else {
    die (mysqli_connect_error());
}