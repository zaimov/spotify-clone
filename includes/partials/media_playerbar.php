<?php
$songQuery = mysqli_query($con, "SELECT * FROM songs ORDER BY RAND() LIMIT 10");

$resultArray = array();

while($row = mysqli_fetch_array($songQuery)) {
    array_push($resultArray, $row['id']);
}

$jsonArray = json_encode($resultArray);
?>

<script>
$(document).ready(function(){
    currentPlaylist = <?php echo $jsonArray; ?>;
    audioElement = new Audio();
    setTrack(currentPlaylist[0], currentPLaylist, false);
});

function setTrack(trackId, newPLaylist, play) {
    $.post('includes/handlers/ajax/getSongJson.php', {songId: trackId}, function(data) {

        const track = JSON.parse(data);

        console.log(data);
    });
    
    if (play) {
        audioElement.play();
    }
}

function playSong() {
    $(".media__playerbar-controlButton.play").hide();
    $(".media__playerbar-controlButton.pause").show();
    audioElement.play();
}

function pauseSong() {
    $(".media__playerbar-controlButton.play").show();
    $(".media__playerbar-controlButton.pause").hide();
    audioElement.pause();
}
</script>

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

                <button class="media__playerbar-controlButton play" title="Play Button" onclick="playSong()">
                    <img src="assets/images/icons/play.png" alt="Play">
                </button>

                <button class="media__playerbar-controlButton pause" title="Pause Button" style="display:none;" onclick="pauseSong()">
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