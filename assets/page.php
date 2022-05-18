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

    public function setTitle(): void
    {
        $title = $this->title;
        $name = $this->name;

        $name = "$title - $name";
        echo "    <title>$name</title>";
    }

    public function setHeader(): void
    {
        require_once "header1.php";
        echo "\n";
        $this->setTitle();
        echo "\n";
        require_once "header2.php";
    }

    public function setFooter(): void
    {
        require_once "footer.php";
    }
}