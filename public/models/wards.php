<?php

class wards {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getByDistrictId($districtId) {
        $stmt = $this->conn->prepare("SELECT * FROM wards WHERE district_id = :district_id");
        $stmt->bindParam(':district_id', $districtId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
