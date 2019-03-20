var currentPlaylist = []; 
var shufflePlaylist = []; 
var temporaryPlaylist = []; 
var audioElement;
var mouseDown = false;
var currentIndex = 0;
var repeat = false;
var shuffle = false;
var userLoggedIn;

function openPage(url) {
    if(url.indexOf("?" == -1)) {
        url = url + "?";
    }
    var encodedUrl = encodeURI(url + "&userLoggedIn=" + userLoggedIn);
    $("#mainContent").load(encodedUrl);
    $("body").scrollTop(0);
    history.pushState(null, null, url);
}

function formatTime(seconds) {
    var time = Math.round(seconds);
    var minutes = Math.floor(time / 60);
    var seconds = time - minutes * 60;

    var zero = seconds < 10 ? zero = "0" : zero = "";

    return minutes + ":" + zero + seconds;
}

function updateTimeProgressBar(audio) {
    $(".media__playbackbar-time.current").text(formatTime(audio.currentTime));
    $(".media__playbackbar-time.remaining").text(formatTime(audio.duration - audio.currentTime));

    var progress = audio.currentTime /audio.duration * 100;
    $(".media__playbackbar .media__playbackbar-progressFiller").css("width", progress + "%");
}

function updateVolumeProgressBar(audio) {
    var volume = audio.volume * 100;
    $(".media__playerbar-right .media__playbackbar-progressFiller").css("width", volume + "%");
}

function Audio() {
    this.currentlyPlaying;
    this.audio = document.createElement('audio');

    this.audio.addEventListener('ended', function() {
        nextSong();
    });

    this.audio.addEventListener('canplay', function () {
        var duration = formatTime(this.duration);
        $('.media__playbackbar-time.remaining').text(duration);
    });

    this.audio.addEventListener('timeupdate', function () {
        if(this.duration) {
            updateTimeProgressBar(this);
        }
    });

    this.audio.addEventListener('volumechange', function () {
        updateVolumeProgressBar(this);
    });

    this.setTrack = function(track) {
        this.currentlyPlaying = track;
        this.audio.src = track.path;
    }

    this.play = function() {
        this.audio.play();
    }

    this.pause = function() {
        this.audio.pause();
    }

    this.setTime = function(seconds) {
        this.audio.currentTime = seconds;
    }
}

 