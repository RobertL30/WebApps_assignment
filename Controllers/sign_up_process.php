<?php

require_once '../Config/DBconnect.php';

if (isset($_POST['firstname'])) {
    try{
    $new_user = array(
        "username" => ($_POST['fisrtName'] . $_POST['lastName']),
        "email" => $_POST ['email'],
        "password" => $_POST['password'],
        "first_name" => $_POST['firstName'],
        "last_name" => $_POST['lastName'],
        "address" => $_POST['address'],
        "contact_no" => $_POST['contactNo']
    );

    $sql = "INSERT INTO users (username, email, password, first_name, Last_name, address, contact_no)
        VALUES (:username, email, :password, :first_name, :last_name, :address, :contact_no");

$statement =$connection->prepare($sql);
$statement ->execute($new_user);

//redirect the user to the sign in page
        header("location:../Views/auth/sign_in.php");
        exit;

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage()
    }
}
?>