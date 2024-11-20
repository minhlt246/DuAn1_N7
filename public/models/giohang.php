<?php
session_start();

class Cart {
    public function addProduct($productId, $quantity) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] += $quantity;
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }
    }

    public function removeProduct($productId) {
        if (isset($_SESSION['cart'][$productId])) {
            unset($_SESSION['cart'][$productId]);
        }
    }

    public function updateProduct($productId, $quantity) {
        if ($quantity <= 0) {
            $this->removeProduct($productId);
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }
    }

    public function getCartItems() {
        return $_SESSION['cart'] ?? [];
    }

    public function clearCart() {
        unset($_SESSION['cart']);
    }
}
