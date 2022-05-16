<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="NuggetReckt">

    <link rel="shortcut icon" href="<?php echo("assets/images/CloudProject_logo_0.1.png") ?>">

    <link rel="stylesheet" href="<?php echo("assets/css/normalize.css") ?>">
    <link rel="stylesheet" href="<?php echo("assets/css/style.css") ?>">
    <link rel="stylesheet" href="<?php echo("assets/css/user-form.css") ?>">
    <link rel="stylesheet" href="<?php echo("assets/css/upload.css") ?>">
</head>

<body>
<header>
    <div id="navbar">
        <nav>
            <ul class="navbar-ul">
                <li class="navbar-content" id="name">
                    <a href="<?php echo("index.php") ?>">CloudProject</a>
                </li>
                <li class="navbar-content" id="update">
                    <a href="<?php echo("upload.php") ?>">Start uploading</a>
                </li>
                <li class="navbar-content" id="about">
                    <a href="<?php echo("about.php") ?>">About</a>
                </li>
                <?php
                require_once "database/requests.php";

                $request = new Requests("", "", "", "", "");

                if (!$request->isLogged()) {
                    echo "<li class='navbar-content' id='register'>";
                    echo "    <a href='register.php'>Register</a>";
                    echo "</li>";

                    echo "<li class='navbar-content' id='login'>";
                    echo "    <a href='login.php'>Login</a>";
                    echo "</li>";
                }
                if ($request->isLogged()) {
                    echo "<li class='navbar-content' id='account'>";
                    echo "    <a href='account.php'>";
                        if ($request->isPfpSet()) {
                            echo "<img src='$request->userpfp' alt='user-pfp' id='user-pfp'> ";
                        }
                        else {
                            echo "<img src='assets/images/user-default.png' alt='user-pfp' id='user-pfp'> ";
                        }
                    echo $request->username, "</a>";
                    echo "</li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div id="main">