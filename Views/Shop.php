<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - BookStore</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="/Views/CSS/Style.css" rel="stylesheet">
</head>
<body>
<?php include 'Layouts/Header.php'; ?>

<-- Main content -->

<-- shop product grid -->

<div class="row"
     <-- Book 1: Dubliners -->
<dib class="col-md-4 mb-4"
     <div class="card h-100"
          <img src="Images/shop/dubliners.jpg" class="card-img-top mx-auto d-block mt-3" alt="Dubliners" style="width: 150px; height 200px;">
<div class="card-body">
    <h5 class="card-title">Dubliners</h5>
    <p class="card-subtitle mb-2 text-muted">James Joyce</p>
    <p class="card-text small">A collection of short stories depicting the everyday life of Dublin's residents, capturing moments of epiphany and personal reflection.</p>
    <p class="card-text fw-bold">€12.99</p>
</div>
<div class="card-footer bg-white border-top-0"
     <button class="btn btn-dark">Add to cart</button>
</div>
</div>

<?php include 'Layouts/Footer.php'; ?>
</body>
</html>
