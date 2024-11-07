<?php
require_once './controllers/home.controller.php';
require_once './views/header.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        // case 'detail':
        //     $detail = new ProductController;
        //     $detail->detail();
        //     break;
        
        default:
            $home = new HomeController();
            $home->renderHome();
            break;
        }
} else {
        $home = new HomeController();
        $home->renderHome();
    }
require_once './views/footer.php';
?>