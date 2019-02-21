<?php 

function sanitizeFormUsername($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

function sanitizeFormString($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

function sanitizeFormPassword($inputText)
{
    $inputText = strip_tags($inputText);
    return $inputText;
}

if(isset($_POST['loginButton'])) {
    
}

if(isset($_POST['registerButton'])) {
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $passsword = sanitizeFormPassword($_POST['passsword']);
    $passsword2 = sanitizeFormPassword($_POST['passsword2']);
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" placeholder="Username" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" placeholder="Password" required>            
            </p>

            <button type="Submit" name="loginButton">Login</button>
        </form>

        <form action="register.php" id="registerForm" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </p>

            <p>
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            </p>

            <p>
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
            </p>

            <p>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </p>

            <p>
                <label for="email2">Confirm Email</label>
                <input type="email" id="email2" name="email2" placeholder="Email" required>
            </p>

            <p>
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
</body>
</html>