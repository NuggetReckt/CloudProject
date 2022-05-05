<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";

$request = new Requests("", "", "", "");

//ENLEVER COMMENTAIRES QUAND FINI

if (!$request->isLogged()) {
    header("Location: login.php");
}

$page = new Page("Account", "CloudProject");

$page->setHeader();
$page->setTitle();
?>


<?php
$page->setFooter();
?>
