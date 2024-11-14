<!-- b1: tạo the php -->
<!-- b2: tạo class có tên là home controller -->
<!-- b3: tạo contrutor chứa tham số  -->
<!-- b4: tạo hàm chức năng -->
 <?php
 class HomeController{
    private $productModel;
    private $data;
    public function __construct() {
        $this->productModel = new ProductModel();
    }
    public function renderHome($data){
        require_once './views/content/trangChu.php';
    }

    public function getAll(){
        $this->data['products'] = $this->productModel->getAllProduct();
        $this->renderHome($this->data);
    }

 }
 ?>
