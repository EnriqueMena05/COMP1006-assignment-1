<?php
$title = "Saving song";
include ('shared/header.php');
include ('shared/db.php');

    // capturing the variables using the post method
    $name = $_POST['name'];
    $artist = $_POST['artist'];
    $duration = $_POST['duration'];
    $releaseDate = $_POST['releaseDate'];
    $album = $_POST['album'];
    $features = $_POST['features'];
    $genre = $_POST['genre'];
    $ok = true;

    // ensuring the all required inputs are valid before proceeding
    if (empty($name) || empty($artist) || empty($duration) || empty($releaseDate) || empty($genre)) {
        $ok = false;
        echo 'Make sure all the required fields are filled in';
    }

    // inserting the values into the table in the correct positions
    else {
        $sql = "INSERT INTO songs (name, artist, genre, album, releaseDate, features, duration) VALUES(:name, :artist, :genre, :album, :releaseDate, :features, :duration)";

        $cmd = $db->prepare($sql);

        // setting the parameters
        $cmd->bindParam('name', $name, PDO::PARAM_STR, 20);
        $cmd->bindParam('artist', $artist, PDO::PARAM_STR, 20);
        $cmd->bindParam('duration', $duration, PDO::PARAM_STR, 5);
        $cmd->bindParam('releaseDate', $releaseDate, PDO::PARAM_INT);
        $cmd->bindParam('album', $album, PDO::PARAM_STR, 20);
        $cmd->bindParam('features', $features, PDO::PARAM_STR, 50);
        $cmd->bindParam('genre', $genre, PDO::PARAM_STR, 50);

        $cmd->execute();

        $db = null;

        // sending a message to the user telling them the name of their song and the artist has been added to the database
        echo $name . " by " . $artist . " has successfully been added to your song library";
    }
?>
</body>
</html>