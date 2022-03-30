<?php
require_once "header.php";
require_once "footer.php";
class Page {
    function __construct($name, $header = true)
    {
        ini_set('default_charset', 'utf-8');

        $this->name = $name;
        $this->title = null;
    }
}