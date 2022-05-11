<?php

/**
 * @property $name
 * @property $title
 */
class Page
{
    function __construct($title, $name)
    {
        ini_set('default_charset', 'utf-8');

        $this->name = $name;
        $this->title = $title;
    }

    public function setHeader()
    {
        require_once "header.php";
    }

    public function setTitle()
    {
        $title = $this->title;
        $name = $this->name;

        $name = "$title - $name";
        echo "<title>$name</title>";
    }

    public function setFooter()
    {
        require_once "footer.php";
    }
}