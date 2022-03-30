<?php
class Header {
    function __construct($page) {
        $this->page = $page;
    }

    public function getHeader() {
        $page = $this->page;
        require_once './static/header.php';
    }
}
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="NuggetReckt">
    <meta title="Test">
    <link rel="shortcut icon" href="<?php echo $this->page->resource('static/img/favicon.png'); ?>">
    <link rel="stylesheet" href="<?php echo $this->page->resources('static/css/style.css'); ?>"
</head>


<header>
    <div class="navbar">
        <h1>hello</h1>
        <ul>
            <li></li>
        </ul>
    </div>
</header>
