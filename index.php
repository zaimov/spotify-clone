<?php
include("includes/config.php");

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedin = $_SESSION['userLoggedIn'];
} else {
    header('Location: register.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sporify Clone</title>
</head>
<body>
    <h1>Home page</h1>
</body>
</html>