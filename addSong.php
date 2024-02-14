<?php
$title = "Adding songs";
include('shared/header.php');
?>

<h2>Add a new song</h2>

<!-- Creating a form that captures the inputs the inputs from the user-->
<form action="insertSong.php" method = "post">
    <fieldset>
        <label for="name">Song Name: *</label>
        <input name = "name" id = "name" required>
    </fieldset>
    <fieldset>
        <label for="artist">Artist: *</label>
        <input name = "artist" id = "artist" required>
    </fieldset>
    <fieldset>
        <!-- In mySql I saved this as an varchar and not an integer so that I could display the information properly and use : -->
        <label for="duration">Song length in minutes: *</label>
        <input name = "duration" id = "duration" required placeholder = "00:00"> 
    </fieldset>
    <fieldset>
        <label for="releaseDate">Release Year: *</label>
        <input name = "releaseDate" id = "releaseDate">
    </fieldset>

    <!-- the album and featured artists fields are not required because not every song has an album or a featured artist -->
    <fieldset>
        <label for="album">Album name: </label>
        <input name = "album" id = "album">
    </fieldset>
    <fieldset>
        <label for="features">Featured artists: </label>
        <input name = "features" id = "features">
    </fieldset>
    <fieldset>
        <label for="genre">Genre: *</label>
        <select name="genre" id="genre" required>
            <?php
                // Connecting to the database to have access to the genres table in order to display them in a dropdown
                include('shared/db.php');

                // selecting all the data from the genres table and organizing it alphabetically
                $sql = "SELECT * FROM genres ORDER BY name";
                $cmd = $db->prepare($sql);
                $cmd->execute();
                $genres = $cmd->fetchAll();

                // looping through the table and creating an option in the dropdown for every genre name
                foreach ($genres as $genre) {
                    echo '<option>' . $genre['name'] . '</option>';
                }

                $db = null;
            ?>
        </select>
    </fieldset>
    <button>Submit</button>
</form>
</body>
</html>