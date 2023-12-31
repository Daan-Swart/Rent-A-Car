<?php
session_start();
$email_error_message = "";
$password_error_message = "";
//Duplicate error message
if (isset($_SESSION['email_error'])) {
    $email_error_message = $_SESSION['email_error'];
    unset($_SESSION['email_error']);
}

//Password error message
if (isset($_SESSION['password_error'])) {
    $password_error_message = $_SESSION['password_error'];
    unset($_SESSION['password_error']);
}

include('includes/header.php');
?>

<div class="login-body">
    <div class="login-wrapper">
        <div class="card">
            <div class="card-action green">
                <h3 class="white-text">Registreren</h3>
            </div>
            <div class="card-content">

                <!-- Sign Up form -->
                <form action="includes/process_signup.php" method="post" novalidate>
                    <div class="input-field">
                        <label for="name">Naam</label>
                        <input type="text" id="name" name="name" value="Daan">
                    </div>
                    <div class="input-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="daan@mail.com">
                        <!-- Email error message -->
                        <h6 style="color: red;"><?php echo $email_error_message ?></h6>
                    </div>
                    <div class="input-field">
                        <label for="password">Wachtwoord</label>
                        <input type="password" name="password" id="password">
                        <h6 style="color: red;"><?php echo $password_error_message ?></h6>
                    </div>
                    <div class="input-field">
                        <label for="password_confirmation">Herhaal Wachtwoord</label>
                        <input type="password" name="password_confirmation" id="password-confirmation">
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