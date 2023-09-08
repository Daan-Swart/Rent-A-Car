<?php
session_start();
include('includes/header.php');


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST['email'];

    include('includes/database.php');
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = '$email'");
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($user);
    exit();
}

?>

<div class="login-body">
    <div class="login-wrapper">
        <div class="card">
            <div class="card-action green">
                <h3 class="white-text">Inloggen</h3>
            </div>
            <div class="card-content">

                <!-- Login form -->
                <form method="post">
                    <div class="input-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="input-field">
                        <label for="password">Wachtwoord</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="input-field center-align">
                        <input type="submit" class="btn-large green darken-2" value="Bevestigen">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
include('includes/footer.php');
?>