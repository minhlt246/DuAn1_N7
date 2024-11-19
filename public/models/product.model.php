<?php
class ProductModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM product";
        $result = $this->db->getAll($sql);
        return $result;
    }

    public function getDataByName($param)
    {
        $sql = "select c.id as id_danhmuc, c.name as tendanhmuc, p.id as id_product, p2.name, p2.image, p2.sale_price, p2.buying, p2.price  
        from category c 
        join productcategory p on p.id_cate = c.id
        join product p2 on p2.id = p.id_product
        where c.name = '$param'
        order by p2.buying DESC";
        $result = $this->db->getAll($sql);
        return $result;
    }
}
class ProductModels {
    public $mangsp;
    public $mangdm;

    public function productcategory() {
        include_once 'Models/connectmodel.php';
        $dm = new ConnectModel();
        $sql = "SELECT * FROM productcategory";
        $this->mangdm = $dm->selectall($sql);
    }

    public function dssp() {
        include_once 'Models/connectmodel.php';
        $sp = new ConnectModel();
        $sql = "SELECT * FROM sanpham";
        $this->mangsp = $sp->selectall($sql);
    }

    public function dssptheotdm($id) {
        $sql = "SELECT * FROM sanpham WHERE id=:id";
        include_once 'Models/connectmodel.php';
        $sp = new ConnectModel();
        $sp->ketnoi();
        $stmt = $sp->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $sp->conn = null;
        return $kq;
    }
}
