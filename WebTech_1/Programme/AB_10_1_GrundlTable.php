<?php
$server = "localhost"; 
$user = "root"; 
$password = "";
$database = "webtechübungen";

$mysqli = new mysqli($server, $user, $password, $database); 
if ($mysqli->connect_errno) { 
    echo "Fehler beim Zugriff auf MySQL: (" .
     $mysqli->connect_errno . ") " . $mysqli->connect_error;
} 
$mysqli->set_charset("utf8"); 
?>