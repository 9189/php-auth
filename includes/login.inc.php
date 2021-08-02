<?php
if (isset($_POST['login-submit'])) {

    require '../includes/autoloader.inc.php';

    $mailuid = $_POST['uid'];
    $password = $_POST['pwd'];

    $uh = new UserHandler();

    if ($uh->checkUserExisting($mailuid) || $uh->checkMailExisting($mailuid)) {
        $user = $uh->getUserObject($mailuid);

        $passCheck = password_verify($password, $user->password);

        // Ausgeschrieben falls passCheck
        // aus welchem Grund auch immer kein bool ist
        if ($passCheck == true) {
            session_start();
            session_regenerate_id();
            $_SESSION['uid'] = $user->uid;
            $_SESSION['username'] = $user->username;

            header('Location: ../public/index.php?login=success');
            exit();
        } else if ($passCheck == false) {
            header('Location: ../public/login.php?error=wrongpwd');
            exit();
        }
    }
} else {
    header('Location: ../public/login.php?error=nouser');
    exit();
}
