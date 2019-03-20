<?php

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    include("includes/config.php");
    include("includes/classes/Artist.php");
    include("includes/classes/Album.php");
    include("includes/classes/Song.php");
} else {
    include("includes/partials/header.php");
    include("includes/partials/footer.php");
    $url = $_SERVER['REQUEST_URI']; 
    echo "<script>openPage('$url')</script>";
    exit();
}

?>