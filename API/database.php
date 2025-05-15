<?php 
class Database {
    private $db_host = 'localhost';
    private $db_name = 'Admin';
    private $username = 'root';
    private $password = "";

    public $conn;

    public function getConnection(): PDO {
        $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
            return $this->conn;
        }

    }
?>