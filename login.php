<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";

$page = new Page("Login", "CloudProject");

$page->setTitle();

$req = new Requests("", "", "", "");