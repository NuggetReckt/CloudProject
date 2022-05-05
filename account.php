<?php
require_once "./assets/page.php";

$page = new Page("Account", "CloudProject");

$page->setHeader();
$page->setTitle();

/*if ($request->isLogged() == false) {
    header("Location: login.php");
}*/
?>


<?php
$page->setFooter();
?>
