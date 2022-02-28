<?php
class DB{
    public $conn;
    protected $servername = "db";
    protected $username = "root";
    protected $dbname = "training_nfq";
    protected $password = "password";

    function __construct(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname,3306);
    }
}