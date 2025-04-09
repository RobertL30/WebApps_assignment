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