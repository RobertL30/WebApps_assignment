<?php
// Simple cart model based on sessions

// We'll use simple functions rather than a class
function addToCart($product_id, $title, $price, $quantity = 1) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // If product already in cart, increase quantity
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } else {
        // Add new product to cart
        $_SESSION['cart'][$product_id] = array(
            'title' => $title,
            'price' => $price,
            'quantity' => $quantity
        );
    }
}

function updateCartItem($product_id, $quantity) {
    if (isset($_SESSION['cart'][$product_id])) {
        // If quantity is 0 or less, remove the item
        if ($quantity <= 0) {
            removeCartItem($product_id);
        } else {
            $_SESSION['cart'][$product_id]['quantity'] = $quantity;
        }
        return true;
    }
    return false;
}

function removeCartItem($product_id) {
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
        return true;
    }
    return false;
}

function getCartContents() {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    return $_SESSION['cart'];
}

function getCartTotal() {
    $total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'] * $item['quantity'];
        }
    }
    return $total;
}
?>