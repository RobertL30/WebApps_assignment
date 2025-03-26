<?php
require_once '../Models/cart.php'
require_once '../common.php'

if (session_status() ==PHP_SESSION_NONE) {
    session_start();
}

$cart = Cart::getCartContents();
$total = Cart::getCartTotal();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaperTrail - Your Cart</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Views/CSS/Style.css" rel="stylesheet">
</head>
<body>
<?php include 'Layouts/Header.php'; ?>

<div class="container my-5">
    <h1 class="mb-4 text-center">Your shopping cart</h1>

    <?php if(empty($cart)): ?>
    div<div class="alter alter-info">
        Your cart is empty. <a href="/Views/Shop.php">Why not check out our selection?</a>
    </div>
    <?php else: ?>
    <div class="table-responsive"
         <table class="Table table-hover">
             <thead>
             <tr>
                 <th>Title</th>
                 <th>Price</th>
                 <th>Quantity</th>
                 <th>Subtotal</th>
             </tr>
             </thead>
             <tbody>
             <?php foreach ($cart as $product_id => $item): ?>
             <tr>
                 <td><?php echo escape($item['Title']); ?></td>
                 <td><?php echo escape($item['Price']);?></td>
             </tbody>

         </table>
</div>