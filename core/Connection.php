<?php
/**
 * Created by: Stephan Hoeksema 2023
 * SL01COL04
 */

class Connection
{
    public $hostname, $dbname, $username, $password, $conn;

    function __construct() {
        $this->hostname = "localhost";
        $this->dbname = "profileApp";
        $this->username = "root";
        $this->password = "Blub!976";
        try {
            $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        return $this->conn;
    }
}