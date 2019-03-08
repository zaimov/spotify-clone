<?php include("includes/partials/header.php");

if (isset($_GET['id'])) {
    $albumId = $_GET['id'];
} else {
    header('Location: index.php');
}

$album = new Album($con, $albumId);
$artist = $album->getArtist();
?>

<div class="album">
    <div class="row">
        <div class="col-md-2">
            <div class="album__artwork">
                <img src="<?php echo $album->getArtworkPath(); ?>" alt="">
            </div>
        </div>

        <div class="col-md-10">
            <div class="album__info">
                <h2><?php echo $album->getTitle(); ?></h2>
                <p>by <?php echo $artist->getName(); ?></p>
                <p><?php echo $album->getNumberOfSongs(); ?> songs</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="album__songs">
                <ul>
                    <?php 
                    
                    $songIdArray = $album->getSongIds(); 
                    $i = 1;

                    foreach($songIdArray as $song) {
                        
                        $albumSong = new Song($con, $song);
                        $albumArtist = $albumSong->getArtist();

                        echo "<li>
                                <img class='album__songs-play' src='assets/images/icons/play-white.png'>
                                <span class='album__songs-trackNumber'>$i</span>
                            </li>";

                        $i++;

                    }
                    
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include("includes/partials/footer.php"); ?> 