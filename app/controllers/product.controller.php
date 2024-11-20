<?php 

class ProductController{
    private $productModel;
    public $data = [];
    function __construct() {
        $this->productModel = new ProductModel;
    }
    function renderView($data, $view) {
        if (!empty($data)) {
            extract($data);
        }
        $viewPath = './views/content/' . $view . '.php';
        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            echo "View không tồn tại.";
        }
    }

    function getAllProduct(){
        $products = $this->productModel->getAllProduct();
        if(!empty($products)){
            $data['products'] = $products;
            $this->renderView($data, 'trangChu');
        }else{
            echo "Không tìm thấy sản phẩm.";
        }
    }

    function detail() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }else{
            $id = 0;
        }
        $detail = $this->productModel->getIdPro($id);
        if(is_array($detail)) {
            $data['productDetail'] = $detail;
            $this->renderView($data, 'chiTietSp');
        }else{
            echo "Không tìm thấy sản phẩm ";
        }
    }

    public function getProductByCate2()
    {
        // b1 nhận request để lấy giá trị của cate 
        // b2 lấy danh sách sản phẩm theo cate
        // b3 đưa dữ liệu vào mảng dssp
        if (isset($_GET['id_danhmuc'])) {
            $id_danhmuc = $_GET['id_danhmuc'];
            $products = $this->productModel->getProductByCate($id_danhmuc);
            $allProducts = $products;
        }else{
            $allProducts = [];
        }

        if(is_array($allProducts)) {
            $data['sptdm2'] = $allProducts;
            $this->renderView($data, 'sanPham');
        }else{
            echo "Không tìm thấy sản phẩm ";
        }
    }
}

?>