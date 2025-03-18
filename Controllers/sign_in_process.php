<?php

require_once '../Config/DBconnect.php'

//kick off the session
start_session();

$login_error = flase;

if (isset($_POST['username']) && isset($_POST['password']))
    //preps SQL statement to check the user details
    $sql = "SELECT from WHERE username =: username AND password =: password";

        //will sanitise inputs
        $username = escape($_POST['username']);
        $password = escape($_POST['password']);

        $statement = $connection->prepare($sql);
        $statement->bindParam(':username', $username, PDO::PARAM_STR)
        $statement->bindParam(':password', $password, PDO::PARAM_STR)
            $statemen->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($statement->rowCount() > 0 ) {
            //start session
            session_start();

            //store user info for session

            $_SESSION['user_id'] = $result['ID'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['is_logged_in'] = true;

        }

