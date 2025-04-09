<?php
if (session_status() == PHP_SESSION_NONE)
 {
    session_start();
    }

// checks if user is logged in and redirect to login if not
if (isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: /Views/auth/sign_in.php");
    exit();
}

//db connection
require_once '/Config/DBconnect.php';
require_once '/common.php';

//pulls user data from database
$user_id = $_SESSION['user_id']
$sql = "SELECT * FROM users WHERE id = :user_id";
$stmt = $connection->prepare($sql);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

//Success message 
$updateSuccess = false;
if (isset($_SESSION['account_updated']) && $_SESSION['account_updated'] === true) {
    $updateSuccess = true;
    unset($_SESSION['account_updated']);
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Views/CSS/Style.css" rel="stylesheet">
</head>
<body>
<?php include 'Layouts/Header.php'; ?>

<div class="row">

<div class="col-12">
    <h1 class="mb-4"> Account Management</h1>

<?php if($updateSuccess):?>
    <div class="alert alert-success mb-4">
        Your account information was successfully account_updated</div>

</div> 
<?php endif; ?>

