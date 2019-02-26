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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
</head>
<body>
    <div class="media">

        <div class="media__content">
            <div class="media__content-sidebar">
                <nav class="media__content-navbar">
                    <a href="index.php" class="media__content-logo">
                        <img src="assets/images/icons/logo.jpeg" alt="logo">
                    </a>

                    <div class="media__content-items">
                        <a href="search.php" class="media__content-search">Search
                            <img src="assets/images/icons/search.png" alt="search icon" class="search-icon">
                        </a>
                        
                    </div>

                    <div class="media__content-items">
                        <a href="browse.php">Browse</a>
                        <a href="library.php">Your Library</a>
                        <a href="profile.php">User Profile</a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="media__player">
            <div class="media__playerbar">
                <div class="media__playerbar-left">
                    <div class="media__playerbar-album">
                        <span class="media__playerbar-albumLink">
                            <img src="https://jellyfishhealth.com/wp-content/uploads/2018/03/Square-PhotoWithout.png" alt="album">
                        </span>

                        <div class="media__playerbar-trackInfo">
                            <span class="media__playerbar-trackName">
                                Nothing else matters Nothing else matters 
                            </span>
                            <span class="media__playerbar-artistName">
                                Metallica
                            </span>
                        </div>
                    </div>
                </div>

                <div class="media__playerbar-center">
                    <div class="media__playerbar-controls">
                        <div class="media__playerbar-buttons">
                            <button class="media__playerbar-controlButton shuffle" title="Shuffle Button">
                                <img src="assets/images/icons/shuffle.png" alt="Shuffle">
                            </button>

                            <button class="media__playerbar-controlButton previous" title="Previous Button">
                                <img src="assets/images/icons/previous.png" alt="Previous">
                            </button>

                            <button class="media__playerbar-controlButton play" title="Play Button">
                                <img src="assets/images/icons/play.png" alt="Play">
                            </button>

                            <button class="media__playerbar-controlButton pause" title="Pause Button" style="display:none;">
                                <img src="assets/images/icons/pause.png" alt="Pause">
                            </button>

                            <button class="media__playerbar-controlButton next" title="Next Button">
                                <img src="assets/images/icons/next.png" alt="Next">
                            </button>

                            <button class="media__playerbar-controlButton repeat" title="Repeat Button">
                                <img src="assets/images/icons/repeat.png" alt="Repeat">
                            </button>
                        </div>

                        <div class="media__playbackbar">
                            <span class="media__playbackbar-time current">0.00</span>

                            <div class="media__playbackbar-progress progressBar">
                                <div class="media__playbackbar-progressBackground">
                                    <div class="media__playbackbar-progressFiller">

                                    </div>
                                </div>
                            </div>
                            
                            <span class="media__playbackbar-time remaining">0.00</span>
                        </div>
                    </div>
                </div>

                <div class="media__playerbar-right">
                    <div class="media__playerbar-volumeBar">
                        <button class="media__playerbar-controlButton volume" title="Volume Button">
                            <img src="assets/images/icons/volume.png" alt="Volume">
                        </button>

                        <div class="media__playbackbar-progress progressBar">
                            <div class="media__playbackbar-progressBackground">
                                <div class="media__playbackbar-progressFiller">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>