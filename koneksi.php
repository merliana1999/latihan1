<?php
$dbhost = "localhost";
$dbname = "dbmusik";
$dbuser = "root";
$dbpass = "";

$koneksi = new PDO("mysql:host=" . $dbhost ."; dbname=" . $dbname."", $dbuser , $dbpass);