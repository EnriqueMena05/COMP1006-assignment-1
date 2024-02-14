<?php
$title = "Song Library";

include('shared/header.php');
include('shared/db.php');

// fetching all the data from the songs table
$sql = "SELECT * FROM songs";

$cmd = $db->prepare($sql);

$cmd->execute();

// inputing the data into a variable called $songs
$songs = $cmd->fetchALL();

// echoing a table that will contain the information the user gave
echo '<h1> Your songs</h1>';
echo '<table><thead><th>Name</th><th>Artist</th><th>Song Length</th><th>Release Year</th><th>Album Name</th><th>Featured Artists</th><th>Genre</th></thead>';

// looping through each value given by the user and adding it to the table
foreach ($songs as $song) {
    echo '<tr>
    <td>' . $song['name']. '</td>
    <td>' . $song['artist']. '</td>
    <td>' . $song['duration']. '</td>
    <td>' . $song['releaseDate']. '</td>
    <td>' . $song['album']. '</td>
    <td>' . $song['features']. '</td>
    <td>' . $song['genre']. '</td>
    </tr>'; 
}

echo '<ul>';

$db = null;

?>
</body>
</html>