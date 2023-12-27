<?php
$mysqli = new mysqli("localhost", "root", "", "music_mp3");

if ($mysqli->connect_errno) {
    echo "Failed to connect:" . $mysqli->connect_error;
    exit();
}

?>