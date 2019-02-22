<?php
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

include("includes/handlers/register_handler.php");
include("includes/handlers/login_handler.php");

function getInputValue($name) {
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="register">
        <div class="register-wrapper container d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <form action="register.php" id="loginForm" class="register-wrapper__login-form" method="POST">
                        <h2>Login to your account</h2>
                        <p>
                            <?php echo $account->getError(Constants::$loginFailed) ?>
                            <label for="loginUsername">Username</label>
                            <input type="text" id="loginUsername" name="loginUsername" placeholder="Username" required>
                        </p>
                        <p>
                            <label for="loginPassword">Password</label>
                            <input type="password" id="loginPassword" name="loginPassword" placeholder="Password" required>            
                        </p>

                        <button type="Submit" name="loginButton">Login</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col">
                <form action="register.php" id="registerForm" class="register-container__register-form" method="POST">
                    <h2>Create your free account</h2>
                    <p>
                        <?php echo $account->getError(Constants::$usernameLength) ?>
                        <?php echo $account->getError(Constants::$usernameTaken) ?>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" value="<?php getInputValue('username') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$firstNameLength) ?>
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" placeholder="First Name" value="<?php getInputValue('firstName') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$lastNameLength) ?>
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name" value="<?php getInputValue('lastName') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$emailsDoNotMatch) ?> 
                        <?php echo $account->getError(Constants::$emailInvalid) ?>
                        <?php echo $account->getError(Constants::$emailTaken) ?>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" value="<?php getInputValue('email') ?>" required>
                    </p>

                    <p>
                        <label for="email2">Confirm Email</label>
                        <input type="email" id="email2" name="email2" placeholder="Email" value="<?php getInputValue('email2') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$passwordsDoNotMatch) ?> 
                        <?php echo $account->getError(Constants::$passwordNotAlphanumeric) ?>
                        <?php echo $account->getError(Constants::$passwordLength) ?>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>            
                    </p>

                    <p>
                        <label for="password2">Confirm Password</label>
                        <input type="password" id="password2" name="password2" placeholder="Password" required>            
                    </p>

                    <button type="Submit" name="registerButton">Sign Up</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>