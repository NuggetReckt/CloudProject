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
                    echo "\n                    ";
                    echo "<a href='register.php'>Register</a>";
                    echo "\n                ";
                    echo "</li>";
                    echo "\n                ";

                    echo "<li class='navbar-content' id='login'>";
                    echo "\n                    ";
                    echo "<a href='login.php'>Login</a>";
                    echo "\n                ";
                    echo "</li>";
                    echo "\n";
                }
                if ($request->isLogged()) {
                    echo "<li class='navbar-content' id='account'>";
                    echo "\n";
                    echo "    <a href='account.php'>";
                    echo "\n";
                    if ($request->isPfpSet()) {
                        echo "<img src='$request->userpfp' alt='user-pfp' id='user-pfp'>";
                    }
                    else {
                        echo "<img src='assets/images/user-default.png' alt='user-pfp' id='user-pfp'>";
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