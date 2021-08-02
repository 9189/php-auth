<?php

class UserHandler extends Dbh {
    public function checkUserExisting($username) {
        $sql = "SELECT username FROM user WHERE username = ?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);

        if($stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }

    public function checkMailExisting($email) {
        $sql = "SELECT email FROM user WHERE email = ?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        if($stmt->rowCount() > 0) {
            return true;
        } 
        return false;
    }

    public function getUserObject($mailuid) {
        $sql = "SELECT * FROM user WHERE username = ? OR email = ?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$mailuid, $mailuid]);

        return $stmt->fetchObject();
    }

    public function insertUser($username, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (username, email, password, ip) VALUES (?, ?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $email, $hashedPassword, $_SERVER['REMOTE_ADDR']]);
    }
}