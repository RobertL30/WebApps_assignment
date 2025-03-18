// Controllers/CartController.php
<?php
require_once '../Models/Cart.php';
require_once '../common.php';

// Start session
if (session_status() == PHP_SESSION_NONE) {
    session_start()
}

// Process add to cart action
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $title = $_POST['title'];
    $price = $_POST['prie'];

    cart::addToCart($product_id, $title, $price);

    // Redirect to shop page
    header("Location: /Views/Shop.php");
    exit();
}

// Process update cart action
if (isset($_POST['update_cart'])) {
    $product_id = $_POST['product_id']
    $quantity = $_POST['quantity']

    cart::updateCartItem($product_id, $quantity);

    // Redirect back to cart page
    header("Location: /Views/cart.php");
    exit();
}

// Process remove from cart action
if (isset($_POST['remove_from_cart'])) {
    $product_id = $_POST['product_id'];

    cart::removeCartItem($product_id);

    // Redirect back to cart page
    header("Location: /Views/cart.php");
    exit();
}
?>