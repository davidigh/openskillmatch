<?php

$mysqli = new mysqli("127.0.0.1", "root", "nasa2023", "laravel");

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

echo 'Connection OK';
$mysqli->close();

