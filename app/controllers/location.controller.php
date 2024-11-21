<?php

require_once '../config/db.config.php';
require_once '../public/models/province.php';
require_once '../public/models/district.php';
require_once '../public/models/wards.php';

class locationcontroller {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function districts($provinceId) {
        $districtModel = new district($this->db);
        echo json_encode($districtModel->getByProvinceId($provinceId));
    }

    public function wards($districtId) {
        $wardModel = new wards($this->db);
        echo json_encode($wardModel->getByDistrictId($districtId));
    }
}
