<?php

class Database
{
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "admin", "admin", "SupMarket");
        if (!$this->conn) {
            echo 'Database Connection Error ' . mysqli_connect_error($this->conn);
        }
    }
    
}
?>