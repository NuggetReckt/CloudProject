<?php

class Header
{
    /**
     * @param $page Page
     */
    function __construct($page)
    {
        $this->page = $page;
        $this->title = null;
    }
}
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="NuggetReckt">
    <link rel="shortcut icon" href="<?php echo ("assets/img/favicon.png")?>">
    <link rel="stylesheet" href="<?php echo ("assets/css/normalize.css") ?>">
    <link rel="stylesheet" href="<?php echo ("assets/css/style.css") ?>">
</head>

<body>
<header>
    <div id="navbar">
        <nav>
            <ul>
                <li>
                    <a href="<?php echo ("lien1.php")?>">lien 1</a>
                </li>
                <li>
                    <a href="<?php echo ("lien2.php")?>">lien 2</a>
                </li>
                <li>
                    <a href="<?php echo ("lien3.php")?>">lien 3</a>
                </li>
                <li>
                    <a href="<?php echo ("lien4.php")?>">lien 4</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main>

</main>