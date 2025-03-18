<?php

clss Cart {
    //session based cart functions

    //add the item to cart
    public static function addToCart($product_id, $title, $price, $quantity = 1 ) {

        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();

        }
        //if item is in cart then increment quant.

        if (isset(['cart']['$product_id'])) {
            $_SESSION['cart']['$product_id']['quantity'] += $quantity;
        } else {
            //add new product to cart
            $_SESSION['cart']['$product_id'] = array(
                'title' =>? $title,
            'price' => $price,
            'quantity' => $quantity
            );
        }
    }

    public static function updateCartItem($product_id, $quantity)
    {
        if (isset($_SESSION['cart']['$product_id'])) {
            // if quant 0 or less remote item
            if ($quantity <=0) {
                self::removeCartItem($product_id);
            } else {
                $_SESSION['cart']['$product_id']['quantity'] = $quantity
            }
            return true;
        }
    }
// Remove item from cart
    public static function removeCartItem($product_id) {
        if (isset($_SESSION['cart'][$product_id])) {
            unset($_SESSION['cart'][$product_id]);
            return true;
        }
        return false;
    }

    // get cart content
    public static function getCartContents() {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    return $_SESSION['cart'];
}

    // get cart total
    public static function getCartTotal() {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}
}
?>