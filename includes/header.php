<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <!-- My stylesheet -->
    <link rel="stylesheet" href="includes/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rent-A-Car</title>
</head>

<body>
    <header>

        <nav class="nav-wrapper transparent">
            <div class="container transparent">

                <!-- Navbar -->
                <a href="index.php" class="brand-logo">Rent-A-Car</a>
                <a href="" class="sidenav-trigger white-text" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="login.php" class="btn yellow darken-4 white-text">Inloggen</a></li>
                    <li><a href="sign_up.php" class="btn yellow darken-4 white-text">Registreren</a></li>
                </ul>
                <ul class="right hide-on-med-and-down" id="firstnav">
                    <li><a href="index.php" id="home-link">Home</a></li>
                    <li><a href="#services">Auto huren</a></li>
                    <li><a href="busjeshuren.php">Bus huren</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <!-- Sidenav -->
                <ul class="sidenav grey lighten-2" id="mobile-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Auto Huren</a></li>
                    <li><a href="busjeshuren.php">Bus huren</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="login.php">Inloggen</a></li>
                    <li><a href="sign_up.php">Registreren</a></li>
                </ul>
            </div>
        </nav>
    </header>