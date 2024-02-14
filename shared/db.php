<?php
// connecting to my aws server
    $db = new PDO('mysql:host=172.31.22.43;dbname=Enrique200591526', 'Enrique200591526', 'ch1rCCifKt');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>