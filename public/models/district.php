<?php

class district {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getByProvinceId($provinceId) {
        $stmt = $this->conn->prepare("SELECT * FROM district WHERE province_id = :province_id");
        $stmt->bindParam(':province_id', $provinceId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
