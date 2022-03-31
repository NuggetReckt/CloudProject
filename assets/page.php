<?php
require_once "header.php";
require_once "footer.php";
class Page {
    function __construct($name, $title)
    {
        ini_set('default_charset', 'utf-8');

        $this->name = $name;
        $this->title = $title;
    }

    function setTitle() {
        $title = $this->title;
        $name = $this->name;

        $name = "$name - $title";
        echo "<title>$name</title>";
    }
}