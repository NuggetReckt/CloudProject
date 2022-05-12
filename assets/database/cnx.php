<?php

class Cnx
{
    function __construct($user, $mdp, $db, $server)
    {
        $this->user = $user;
        $this->mdp = $mdp;
        $this->db = $db;
        $this->server = $server;
    }

    function isConnected()
    {
        $this->user = "root";
        $this->mdp = "root";
        $this->db = "user";
        $this->server = "localhost";

        $link = mysqli_connect($this->server, $this->user, $this->mdp, $this->db);

        if ($link) {
            return true;
        } else {
            die (mysqli_connect_error());
            return false;
        }
    }
}