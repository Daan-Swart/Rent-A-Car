<?php

// go back to register (temporay code) 
echo '<a href="../sign_up.php"><<< Naar registreren</a>';
echo "<br><br>";

// name validation
if (empty($_POST['name'])){
    die('name is required');
}

// email validation
if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    die("Valid email is re  quired");
}

//PASSWORD VALIDATION

//Check if password is at least 8 characters
if(strlen($_POST["password"]) < 8){
    die("password must be at least 8 characters");

}

//Check if password containes at least 1 letter
if(! preg_match("/[a-z]/i", $_POST["password"])){
    die('password must contain at least one letter');
}

//Check if password containes a number
if (! preg_match("/[0-9]/", $_POST["password"])) {
    die('password must contain at least one number');
}



//print post array (temporay code)
print_r($_POST);
