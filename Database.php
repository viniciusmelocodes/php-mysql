<?php
class Database {
    private $host = "localhost:3306";
    private $db_name = "db";
    private $username = "user";
    private $password = "123456789Vl@";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage() . '<br>';
        }

        return $this->conn;
    }
}
