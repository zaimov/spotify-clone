<?php include("includes/partials/header.php"); ?>

    <h1 class="media__maincontent-header">You might also like</h1>

    <div class="media__maincontent-grid">

        <?php
            $album_query = mysqli_query($con, "SELECT * FROM albums ORDER BY Rand() LIMIT 10");

            while($row = mysqli_fetch_array($album_query)) {
                
                echo '<div class="media__maincontent-griditem">
                        <a href="album.php?id=' . $row["id"] . '">
                            <img src="' . $row["artworkPath"] . '">
                            <div class="media__maincontent-griditem-info">
                            ' . $row["title"] . '
                            </div>
                        </a>
                    </div>';

            }
        ?>

    </div>

<?php include("includes/partials/footer.php"); ?>