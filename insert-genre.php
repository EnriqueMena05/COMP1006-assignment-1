<?php
$title = "Saving your genre";
include('shared/header.php');

// creating a variable named $genres that captures all the data of genres from the songs table
$genres = $_POST['genre'];
$ok = true;

// verifies that the users input is valid before proceeding
if (empty($genres)) {
    $ok = false;
    echo 'Fill the required fields before pressing submit';
}

else {
    include('shared/db.php');

    // inserting the users input into the table of genres under the name
    $sql = "INSERT INTO genres (name) VALUE (:name)";

    $cmd = $db->prepare($sql);

    // setting the parameter
    $cmd->bindPARAM('name', $genres, PDO::PARAM_STR, 50);

    $cmd->execute();

    $db = null;

    // giving the user a message once the process has been completed telling them that their genre has been added to the database
    if (empty($genre)) {
        echo  $genres . ' has been saved and added to the dropdown of genres.';
    }
}
?>