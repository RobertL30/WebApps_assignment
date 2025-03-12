<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Css linking -->
        <link href="/Views/CSS/Style.css" rel="stylesheet">
</head>

<body>
<nav class="Navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
    <!-- Logo section -->
    <a class="navbar-brand" href="/Views/Index.php">
        <img src="/Views/Images/Logo.png" alt="Book store Logo" width="190" height="190">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNAV">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNAV">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/Views/Index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Views/Shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Members Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Models/Login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Models/cart.php">Cart</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>