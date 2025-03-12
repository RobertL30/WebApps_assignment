<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'Layouts\Header.php' ; ?>

<!-- main content -->
<div class="container my-5">
    <!-- intro Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="p-4 bg-light rounded">
                <h2>Welcome to PaperTrail book store!</h2>
                <p>Your one-stop destination for quality books at great prices.</p>
            </div>
        </div>
    </div>

    <!-- inventory -->
    <div class="row mb-4">
        <div class="col-12">
            <h3>This month's special!</h3>
            <div class="row">
                <!-- Book 1 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="/Models/Products.php" class="text-decoration-none text-dark"
                        <img src="/Views/Images/dracula.jpg" class="card-img-top mx-auto d-block mt-3" alt="Book Cover" style="width: 150px; height: 200px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dracula</h5>
                            <p class="card-text">€12.99</p>
                            <button class="btn btn-primary btn-sm"> View Details</button>
                        </div>
                    </div>
                </div>
                <!-- Book 2 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/Views/Images/frank.jpg" class="card-img-top mx-auto d-block mt-3" alt="Book Cover" style="width: 150px; height: 200px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Frankenstein</h5>
                            <p class="card-text">€14.99</p>
                            <button class="btn btn-primary btn-sm"> View Details</button>
                        </div>
                    </div>
                </div>
                <!-- Book 3 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/Views/Images/lovecraft.jpg" class="card-img-top mx-auto d-block mt-3" alt="Book Cover" style="width: 150px; height: 200px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">H.P Lovecraft Anthology</h5>
                            <p class="card-text">€29.99</p>
                            <button class="btn btn-primary btn-sm"> View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- member info -->
    <div class="row">
        <div class="col-12">
            <div class="p-4 bg-light rounded">
                <h3>Member Benefits</h3>
                <p>Members get access to exclusive books not available to regular customers. Create an account to unlock these special collections.</p>
            </div>
        </div>
    </div>
</div>


<?php include 'Layouts\Footer.php' ; ?>
</body>
</html>