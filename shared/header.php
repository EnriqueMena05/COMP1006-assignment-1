<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- linking the stylesheet in the header to make sure its included in all the other files that are using the shared header -->
    <!-- stylesheet obtained from https://watercss.kognise.dev/ -->
    <!-- all css done for my site gets credit from that site -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title><?php echo $title?></title>
</head>

    <body>
        <ul>
            <li>
                <a href="songLibrary.php">View all songs</a>
            </li>
            <li>
                <a href="addSong.php">Add a new song</a>
            </li>
            <li>
                <a href="moreGenres.php">Add more genres</a>
            </li>
        </ul>