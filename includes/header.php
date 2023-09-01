<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rent-A-Car</title>
</head>

<body>
    <header>
        <nav class="nav-wrapper green">
            <div class="container">
                <a href="index.php" class="brand-logo">Rent-A-Car</a>
                <a href="" class="sidenav-trigger white-text" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../login.php" class="btn green darken-2">Inloggen</a></li>
                    <li><a href="add.php" class="btn green darken-3">Registreren</a></li>
                </ul>
                <ul class="right hide-on-med-and-down" id="firstnav">
                    <li><a href="#photo's" id="home-link">Home</a></li>
                    <li><a href="#services">Auto huren</a></li>
                    <li><a href="busjeshuren.php">Bus huren</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <ul class="sidenav grey lighten-2" id="mobile-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Auto Huren</a></li>
                    <li><a href="busjeshuren.php">Bus huren</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#services">Inloggen</a></li>
                    <li><a href="#contact">Registreren</a></li>
                </ul>
            </div>
        </nav>
    </header>