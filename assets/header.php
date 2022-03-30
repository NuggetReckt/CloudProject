<?php
/**
 * @param $page Page
 */
class Header {
    function __construct($page) {
        $this->page = $page;
        $this->title = null;
        $this->name = null;
    }

    public function setHeader() {
        $page = $this->page;
    }

    public function setTitle() {
        $title = $this->title;
        $name = $this->name;
        if ($title !== null) {
            $name = "$title - $name";
        }
        echo "<title>$name</title>";
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
    <link rel="shortcut icon" href="<?php echo $this->page->resource('assets/img/favicon.png'); ?>">
    <link rel="stylesheet" href="<?php echo $this->page->resources('assets/css/style.css'); ?>"
    <link rel="stylesheet" href="<?php echo $this->page->resources('assets/css/normalize.css'); ?>"
</head>


<header>
    <div class="navbar">
        <h1>hello</h1>
        <ul>
            <li></li>
        </ul>
    </div>
</header>
