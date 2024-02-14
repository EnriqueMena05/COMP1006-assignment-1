<?php
    $title = "Adding another genre";
    include ('shared/header.php');
?>

<h2>Add a New Service</h2>

<!-- creating a basic form that captures the users inputs using the post method -->
<form method ="post" action="insert-genre.php">
    <fieldset>
        <label for="genre"> Genre: *</label>
        <input name="genre" id="genre" required>
        <button>Submit</button>
    </fieldset>
</form>

</body>
</html>