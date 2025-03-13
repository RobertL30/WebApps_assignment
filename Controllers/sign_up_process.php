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

        //store username in variable to print it back to the user later on
        $success = true;
        $username = $new_user['username'];


    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

//check if email address already exists
// set up the variables
$success = false;
$email_error = false;

$check_email = "SELECT * FROM users WHERE email = :email";
$email_stmt = $connection->prepare($check_email);
$email_stmt->execute(['email'=>$_POST['email']]);

if ($email_stmt ->rowCount () > 0) {
    //email exists
    $email_error = true;
} else {
    try {
        $new_user = array(
            "username" => ($_POST['firstName'] . $_POST['lastName']),
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "first_name" => $_POST['firstName'],
            "last_name" => $_POST['lastName'],
            "address" => $_POST['address'],
            "contact_number" => $_POST['contactNumber']);

        )
    }
}


//return feedback to user upon successful sign up
include '../Views/Layouts/Header.php';
?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <?php if ($success): ?>
        <div class="alert alert-success">
        <h4>Registration has been successful</h4>
        <p>Your username is: <strong><?php echo ($username); ?></strong></p>
            <hr>
        <p><a href="../Views/auth/sign_in.php" class="btn btn-primary ">Sign In Now!</a></p>
            </div>
                <?php endif; ?>
        </div>
    </div>
</div>
<?php include '../Views/Layouts/Footer.php'; ?>