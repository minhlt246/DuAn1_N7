<?php
class CategoryModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM productcategory";
        $result = $this->db->getAll($sql);
        return $result;
    }

    
}
