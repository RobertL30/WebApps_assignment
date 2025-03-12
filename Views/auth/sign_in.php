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
<div class="container">
    <div class="signin-container">
    <h2 class="text-center mb-4">Sign in!</h2>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" required>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
    </div>
</div>


    <?php include 'Layouts\Footer.php' ; ?>
</body>
</html>