<?php
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
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="input-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="input-field">
                        <label for="password">Wachtwoord</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="input-field">
                        <label for="password-confirmation">Herhaal Wachtwoord</label>
                        <input type="password" name="password_ confirmation" id="password-confirmation">
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