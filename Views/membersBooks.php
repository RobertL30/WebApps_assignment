<?php
session_start();

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

<!-- fourth row -->
<div class="row">
    <!-- Book 10: Wuthering Heights -->
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="Images/shop/wuthering_heights.jpg" class="card-img-top mx-auto d-block mt-3" alt="Wuthering Heights" style="width: 150px; height 200px;">
            <div class="card-body">
                <h5 class="card-title">Wuthering Heights</h5>
                <p class="card-subtitle mb-2 text-muted">Emily Bronte</p>
                <p class="card-text small">A tale of intense and destructive love set on the Yorkshire moors.</p>
                <p class="card-text fw-bold">€13.75</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <button class="btn btn-dark w-100">Add to cart</button>
            </div>
        </div>
    </div>
    <!-- Book 11: Frankenstein -->
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="Images/shop/frank.jpg" class="card-img-top mx-auto d-block mt-3" alt="Frankenstein" style="width: 150px; height 200px;">
            <div class="card-body">
                <h5 class="card-title">Frankenstein</h5>
                <p class="card-subtitle mb-2 text-muted">Mary Shelly</p>
                <p class="card-text small">A scientist creates life, leading to tragic consequences as his creature seeks acceptance.</p>
                <p class="card-text fw-bold">€12.99</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <button class="btn btn-dark w-100">Add to cart</button>
            </div>
        </div>
    </div>
    <!-- Book 12: Crime and Punishment -->
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="Images/shop/crime_punishment.jpg" class="card-img-top mx-auto d-block mt-3" alt="Crime and Punishment" style="width: 150px; height 200px;">
            <div class="card-body">
                <h5 class="card-title">Crime and Punishment</h5>
                <p class="card-subtitle mb-2 text-muted">Fyodor Dostoevsky</p>
                <p class="card-text small">A destitute student commits murder, exploring themes of guilt and redemption.</p>
                <p class="card-text fw-bold">€17.15</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <button class="btn btn-dark w-100">Add to cart</button>
            </div>
        </div>
    </div>





    <!-- fifth row -->
    <div class="row">
        <!-- Book 13: The Picture of Dorian Gray -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="Images/shop/dorian_gray.jpg" class="card-img-top mx-auto d-block mt-3" alt="The Picture of Dorian Gray" style="width: 150px; height 200px;">
                <div class="card-body">
                    <h5 class="card-title">The Picture of Dorian Gray</h5>
                    <p class="card-subtitle mb-2 text-muted">Oscar Wilde</p>
                    <p class="card-text small">A young man's portrait ages while he remains youthful, reflecting his moral decay.</p>
                    <p class="card-text fw-bold">€12.99</p>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <button class="btn btn-dark w-100">Add to cart</button>
                </div>
            </div>
        </div>
        <!-- Book 14: Anna Karenina -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="Images/shop/anna_karenina.jpg" class="card-img-top mx-auto d-block mt-3" alt="Anna Karenina" style="width: 150px; height 200px;">
                <div class="card-body">
                    <h5 class="card-title">Anna Karenina</h5>
                    <p class="card-subtitle mb-2 text-muted">Leo Tolstoy</p>
                    <p class="card-text small">A married woman embarks on a doomed affair, examining the complexities of Russian society.</p>
                    <p class="card-text fw-bold">€16.99</p>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <button class="btn btn-dark w-100">Add to cart</button>
                </div>
            </div>
        </div>
        <!-- Book 15: The Odyssey -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="Images/shop/odyssey.jpg" class="card-img-top mx-auto d-block mt-3" alt="The Odyssey" style="width: 150px; height 200px;">
                <div class="card-body">
                    <h5 class="card-title">The Odyssey</h5>
                    <p class="card-subtitle mb-2 text-muted">Homer</p>
                    <p class="card-text small">The epic journey of Odysseus as he returns home from the Trojan War, facing numerous trials.</p>
                    <p class="card-text fw-bold">€13.75</p>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <button class="btn btn-dark w-100">Add to cart</button>
                </div>
            </div>
        </div>





        <!-- sixth row -->
        <div class="row">
            <!-- Book 16: The War of the Worlds -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="Images/shop/war_of_the_worlds.jpg" class="card-img-top mx-auto d-block mt-3" alt="The War of the Worlds" style="width: 150px; height 200px;">
                    <div class="card-body">
                        <h5 class="card-title">The War of the Worlds</h5>
                        <p class="card-subtitle mb-2 text-muted">H.G. Wells</p>
                        <p class="card-text small">Earth faces an invasion by ruthless Martians, showcasing humanity's struggle for survival.</p>
                        <p class="card-text fw-bold">€18.99</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <button class="btn btn-dark w-100">Add to cart</button>
                    </div>
                </div>
            </div>
            <!-- Book 17: Madame Bovary -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="Images/shop/Madame_bovary.jpg" class="card-img-top mx-auto d-block mt-3" alt="Madame Bovary" style="width: 150px; height 200px;">
                    <div class="card-body">
                        <h5 class="card-title">Madame Bovary</h5>
                        <p class="card-subtitle mb-2 text-muted">Gustave Flaubert</p>
                        <p class="card-text small">A doctor's wife seeks escape from provincial life through romantic escapades, leading to her downfall.</p>
                        <p class="card-text fw-bold">€14.00</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <button class="btn btn-dark w-100">Add to cart</button>
                    </div>
                </div>
            </div>
            <!-- Book 18: The Canterbury Tales -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="Images/shop/canterbury_tales.jpg" class="card-img-top mx-auto d-block mt-3" alt="The Canterbury Tales" style="width: 150px; height 200px;">
                    <div class="card-body">
                        <h5 class="card-title">The Canterbury Tales</h5>
                        <p class="card-subtitle mb-2 text-muted">Geoffrey Chaucer</p>
                        <p class="card-text small">A collection of stories told by pilgrims journeying to Canterbury, offering a vivid portrait of medieval society.</p>
                        <p class="card-text fw-bold">€15.50</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <button class="btn btn-dark w-100">Add to cart</button>
                    </div>
                </div>
            </div>


<?php include 'Layouts\Footer.php' ; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>