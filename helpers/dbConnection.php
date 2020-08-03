<?php

Class OpenCon {
    public $dbhost, $dbuser, $dbpass, $db, $port;

    public function __construct () {
        $this->dbhost = "localhost";
        $this->dbuser = $_ENV['dbUsername'];
        $this->dbpass = $_ENV['dbPassword'];
        $this->db = "user_profile";
        $this->port = "3308";
    }
    public function conn () {
        $conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->db, $this->port) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    } 
    public function closeCon($conn) {
        $conn->close();
     }
 }
 
