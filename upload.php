<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";

$request = new Requests("", "", "", "");

if ($request->isLogged() == false) {
    header("Location: login.php");
}

$page = new Page("Upload", "CloudProject");

$page->setHeader();
$page->setTitle();
?>

<div class="">

</div>

<?php
$page->setFooter();
?>
