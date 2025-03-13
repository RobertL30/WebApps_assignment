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

//redirect the user to the sign in page - comment out for now.
// Need to provide more user feed back after account creation.
       // header("location:../Views/auth/sign_in.php");
      //  exit

        //store username in variable to print it back to the user later on
        $success = true;
        $username = $new_user['username'];


    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

//return feedback to user
include '../Views/Layouts/Header.php'

<div class="container my-5">
<div class="row justify-content-center">
<dib class="cold-md-6">
<?php if ($success): ?>
<div class="alert alert-success">
<h4>Registration has been successful</h4>
<p>Your username is: <strong><?php echo ($username); ?></strong></p>
<hr>
<p><a href="../Views/auth/sign_in.php" class="btn btn-primary"></a></p>
</div>
?>