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

    public function setHeader(): void
    {
        require_once "header.php";
    }

    public function setTitle(): void
    {
        $title = $this->title;
        $name = $this->name;

        $name = "$title - $name";
        echo "<title>$name</title>";
    }

    public function setFooter(): void
    {
        require_once "footer.php";
    }
}