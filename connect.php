<?php

$db_name = 'db_perpustakaan';
$db_host = 'localhost';
$db_uname = 'root';
$db_pwd = '';

$conn = new mysqli($db_host, $db_uname, $db_pwd, $db_name);

if ($conn->connect_error) {
    die('Connection error' . $conn->connect_error);
}
