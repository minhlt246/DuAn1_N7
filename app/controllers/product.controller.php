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
}

?>