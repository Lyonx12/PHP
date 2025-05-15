<?php
require_once 'koneksi.php';

class Penghuni extends Koneksi {
    public function getData() {
        $sql = "SELECT * FROM penghuni";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>