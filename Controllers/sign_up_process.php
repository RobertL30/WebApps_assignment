<?php
require_once '../Config/DBconnect.php';

if (isset($_POST['firstName'])) {
    try{
    $new_user = array(
        "username" => ($_POST['firstName'] . $_POST['lastName']),
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "first_name" => $_POST['firstName'],
        "last_name" => $_POST['lastName'],
        "address" => $_POST['address'],
        "contact_number" => $_POST['contactNumber']
    );

    $sql = "INSERT INTO users (username, email, password, first_name, last_name, address, contact_number)
        VALUES (:username, :email, :password, :first_name, :last_name, :address, :contact_number)";

$statement =$connection->prepare($sql);
$statement ->execute($new_user);

//redirect the user to the sign in page
        header("location:../Views/auth/sign_in.php");
        exit;

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>