<?php
class Database {
    private $host = "127.0.0.1";
    private $db_name = "test_db";
    private $username = "root";
    private $password = "root";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            //$this->conn = new PDO("mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn = new PDO("mysql:host=localhost;dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Fallback connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}