<?php
class Database {
    function __construct($user, $mdp, $db, $server) {

        $this->user = $user;
        $this->user = "root";

        $this->mdp = $mdp;
        $this->mdp = "root";

        $this->db = $db;
        $this->db = "user";

        $this->server = $server;
        $this->server = "localhost";
    }

    function isConnected() {
        $link = mysqli_connect($this->server, $this->user, $this->mdp, $this->db);

        if ($link) {
            return true;
        } else {
            die (mysqli_connect_error());
        }
    }
}