<?php
if(isset($_POST['signup-submit'])) {

    require '../includes/autoloader.inc.php';

    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../public/signup.php?error=invalidmail&uid='.$username);
        exit();
    } else if($password !== $passwordRepeat) {
        header('Location: ../public/signup.php?error=passwordcheck&mail='.$email);
        exit();
    } else {
        $userHandler = new UserHandler;

        if($userHandler->checkUserExisting($username)) {
            header('Location: ../public/signup.php?error=usertaken&mail='.$email);
            exit();
        } else if($userHandler->checkMailExisting($email)) {
            header('Location: ../public/signup.php?error=mailtaken&user='.$username);
            exit();
        } else {
            $userHandler->insertUser($username, $email, $password);
            header('Location: ../public/signup.php?signup=success');
            exit();
        }
    }
} else {
    header('Location: ../public/signup.php');
    exit();
} 
