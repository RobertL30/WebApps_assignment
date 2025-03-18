<?php

require_once '../Config/DBconnect.php';
require_once '../common.php';

//kick off the session
session_start();

$login_error = false;

if (isset($_POST['username']) && isset($_POST['password'])) {
    //preps SQL statement to check the user details
    $sql = "SELECT * from users WHERE username = :username AND password = :password";

        //will sanitise inputs
        $username = $_POST['username'];
        $password = $_POST['password'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->bindParam(':password', $password, PDO::PARAM_STR);
            $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($statement->rowCount() > 0 ) {


            //store user info for session

            $_SESSION['user_id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['is_logged_in'] = true;

        }
    }
