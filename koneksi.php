<?php
class Koneksi {
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "handose123";
    protected $db = "tugas8";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}
?>
