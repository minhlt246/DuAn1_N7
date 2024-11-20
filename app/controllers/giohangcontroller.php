<?php
require_once 'models/Cart.php';
require_once 'models/Product.php';

class CartController {
    private $cart;
    private $productModel;

    public function __construct() {
        $this->cart = new Cart();
        $this->productModel = new Product();
    }

    public function addToCart() {
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'] ?? 1;

        $this->cart->addProduct($productId, $quantity);
        header('Location: index.php?controller=cart&action=index');
    }

    public function removeFromCart() {
        $productId = $_POST['product_id'];

        $this->cart->removeProduct($productId);
        header('Location: index.php?controller=cart&action=index');
    }

    public function updateCart() {
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        $this->cart->updateProduct($productId, $quantity);
        header('Location: index.php?controller=cart&action=index');
    }

    public function index() {
        $cartItems = $this->cart->getCartItems();
        $products = [];

        foreach ($cartItems as $productId => $quantity) {
            $product = $this->productModel->getProductById($productId);
            $product['quantity'] = $quantity;
            $product['subtotal'] = $product['price'] * $quantity;
            $products[] = $product;
        }

        include 'views/cart/index.php';
    }
}
