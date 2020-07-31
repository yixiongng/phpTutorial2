<?php

function OpenCon() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "user_profile";
    $port = "3308";

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db,$port) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
 }
 
function CloseCon($conn) {
    
    $conn -> close();
 }
   
?>