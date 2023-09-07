<?php
require("database.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// name validation
if (empty($name)) {
    die('name is required');
}

// email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

//PASSWORD VALIDATION

//Check if password is at least 8 characters
if (strlen($password) < 8) {
    die("password must be at least 8 characters");
}

//Check if password containes at least 1 letter
if (!preg_match("/[a-z]/i", $password)) {
    die('password must contain at least one letter');
}

//Check if password containes a number
if (!preg_match("/[0-9]/", $password)) {
    die('password must contain at least one number');
}

//Check if password and repeated password are the same
if ($_POST['password'] !== $password) {
    die("Passwords must match");
}

//Hash the password
$password_hash = password_hash($password, PASSWORD_DEFAULT);


// insert user credentials into database table user. 

try {
    $query = "INSERT INTO user (name, email, password_hash) VALUES ('$name', '$email', '$password_hash')";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    echo "<br>";

    //  ERROR HANDLING: DUPLICATE EMAIL. 
    // $error_array = $e->errorInfo;
    // echo $error_array[1];

}

//(temporay code)
// print_r($_POST);
// echo "<br>";
// var_dump($password_hash);
