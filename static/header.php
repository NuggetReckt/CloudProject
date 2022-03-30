<?php

class Header {

    function __construct($page) {
        $this->page = $page;
    }

    function print_header() {
        $page = $this->page;

    }
}
?>
<!DOCTYPE html>
<html lang="fr-FR"> </html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="NuggetReckt">
    <meta title="UwU">
    <link rel="shortcut icon" href="<?php echo $this->page->resource('static/img/favicon.png'); ?>">
    <link rel="stylesheet" href="<?php echo $this->page->resources('static/css/style.css'); ?>"
</head>


<header>
    <div class="navbar">
        <ul>
            <li></li>
        </ul>
    </div>
</header>
