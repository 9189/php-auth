<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../style.css">
    <title>Page</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php

                    if (isset($_SESSION['uid'])) {
                        echo
                        '<li class="nav-item active">
                        <form class="form-inline my-2 my-lg-0 mr-3">
                            <input class="form-control mr-sm-2" type="search" placeholder="Suchen" aria-label="Search">
                        </form>
                    </li>';
                    }
                    ?>
                </ul>
                <?php
                if (isset($_SESSION['uid'])) {
                    echo '<a href="../includes/logout.inc.php" class="btn btn-info" role="button">Logout</a>';
                } else {
                    echo '<a href="login.php" class="btn btn-info" role="button">Login</a>';
                }
                ?>
            </div>
        </nav>
    </header>