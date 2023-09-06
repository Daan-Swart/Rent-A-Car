<?php

// name validation
if (empty($_POST['name'])) {
    die('name is required');
}

// email validation
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is re  quired");
}

//PASSWORD VALIDATION

//Check if password is at least 8 characters
if (strlen($_POST["password"]) < 8) {
    die("password must be at least 8 characters");
}

//Check if password containes at least 1 letter
if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die('password must contain at least one letter');
}

//Check if password containes a number
if (!preg_match("/[0-9]/", $_POST["password"])) {
    die('password must contain at least one number');
}

//Check if password and repeated password are the same
if ($_POST['password'] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

//Hash the password
$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

//Database connection
$mysqli = require __DIR__ . "/database.php";

// insert user credentials into database table user. 
$sql = "INSERT INTO user (name, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();
if (!$stmt->prepare($sql)) {
    die("SQL error:" . $mysqli->error);
}

$stmt->bind_param("sss", $_POST['name'], $_POST['email'], $password_hash);
if ($stmt->execute()) {
    header("Location: ../signup_succes.php");
    mysqli_close($mysqli);
    exit;
} else {
    if ($mysqli->errno === 1062) {
        die("email already taken");
    }
    die($mysqli->error . " " . $mysqli->errno);
}


//(temporay code)
// print_r($_POST);
// echo "<br>";
// var_dump($password_hash);
