<?php
session_start();
require("database.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirmation'];

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
    $_SESSION['password_error'] = "Het wachtwoord moet tenminste 8 karakters lang zijn.";
    header("Location: ../sign_up.php");
    die();
}

//Check if password containes at least 1 letter
if (!preg_match("/[a-z]/i", $password)) {
    $_SESSION['password_error'] = "Het wachtwoord moet tenminste 1 letter bevatten.";
    header("Location: ../sign_up.php");
    die();
}

//Check if password containes a number
if (!preg_match("/[0-9]/", $password)) {
    $_SESSION['password_error'] = "Het wachtwoord moet tenminste 1 nummer bevatten.";
    header("Location: ../sign_up.php");
    die();
}

//Check if password and repeated password are the same
if ($password !== $password_confirm) {
    $_SESSION['password_error'] = "De wachtwoorden moeten gelijk zijn";
    header("Location: ../sign_up.php");
    die();
}

//Hash the password
$password_hash = password_hash($password, PASSWORD_DEFAULT);


// insert user credentials into database table user. 

try {
    $stmt = $conn->prepare("INSERT INTO user (name, email, password_hash)
    VALUES (:firstname, :email, :email)");
    $stmt->bindParam(':firstname', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password_hash);
    $stmt->execute();
    header("Location: ../signup_succes.php");
} catch (PDOException $e) {
    echo $e->getMessage();
    echo "<br>";
    $error_array = $e->errorInfo;

    //Email already in use (Duplicate entry voor email);
    if ($error_array[1] === 1062) {
        echo "email al in gebruik";
        $_SESSION['email_error'] = "Email adres bestaat al";
        header("Location: ../sign_up.php");
    }
}

//(temporay code)
// print_r($_POST);
// echo "<br>";
// var_dump($password_hash);
