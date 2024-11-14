<?php
class ProductModel{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function getAllProduct(){
        $sql = "SELECT * FROM product";
        $result = $this->db->getAll($sql);
        return $result;
    }
}
?>