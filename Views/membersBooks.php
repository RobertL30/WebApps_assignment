<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: auth/sign_in.php");
    exit();
}

require_once '../Config/DBconnect.php';
require_once '../Models/Products.php';
require_once '../common.php';

// Create product model instance
$productModel = new Products($connection);
// Get member-only books
$memberBooks = $productModel->getMemberBooks();
?>

<?php
//check if the user is logged in
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {

    header("Location: auth/sign_in.php");
    exit();
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaperTrail Book Store</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'Layouts/Header.php' ; ?>


<!-- main content -->
<div class="container my-5">
    <h1 class="mb-4 text-center">Shop our exclusive, members collection!</h1>

    <div class="row">
    <?php foreach ($memberBooks as $book): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?php echo escape($book['image_path']); ?>" class="card-img-top mx-auto d-block mt-3" alt="<?php echo escape($book['title']); ?>" style="width: 150px; height: 200px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo escape($book['title']); ?></h5>
                    <p class="card-subtitle mb-2 text-muted"><?php echo escape($book['author']); ?></p>
                    <p class="card-text small"><?php echo escape($book['description']); ?></p>
                    <p class="card-text fw-bold">€<?php echo escape($book['price']); ?></p>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <button class="btn btn-dark w-100">Add to cart</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



<?php include 'Layouts\Footer.php' ; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>