<?php
require_once "./assets/page.php";

$page = new Page("Home", "CloudProject");

$page->setHeader();
$page->setTitle();
?>

<div class="page-title">
    <h1 class="h1-page-title">CloudProject - Your data is already in the Cloud.</h1>
</div>

<?php
$page->setFooter();
?>