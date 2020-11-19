<?php


class UserRepository
{
    static function getAll(): array
    {
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("SELECT * FROM user");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static function getUserById($id)
    {
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }


    static function getUserByUsername($username)
    {
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("SELECT * FROM user WHERE username=:username");
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        return $stmt->fetch();
    }


    static function usernameExists($username)
    {
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("SELECT * FROM user WHERE username=:username");
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        if ($stmt->fetch()) {
            return true;
        } else {
            return false;
        }
    }

    static function insertUser($username, $password)
    {
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("INSERT INTO user(username, password) VALUE (:username,:password)");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
    }
}