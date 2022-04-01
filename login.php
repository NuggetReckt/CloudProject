<?php
require_once "./assets/page.php";

$page = new Page("Login", "CloudProject");

$page->setTitle();

$login = new Check($_GET['email'], );