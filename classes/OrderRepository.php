<?php


class OrderRepository
{
    static function getAllForUser($userID): array
    {
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("SELECT * FROM `order` WHERE user_user_id=:id");
        $stmt->bindParam(":id",$userID);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static function insertOrder($userID){
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("INSERT INTO `order` (user_user_id, date, totalPrice) VALUES (:user, DEFAULT, DEFAULT)");
        $stmt->bindParam(":user",$userID);
        $stmt->execute();
        return $conn->lastInsertId();
    }
    static function updateTotal($id,$total){
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("UPDATE `order` SET totalPrice = :total WHERE order_id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->bindParam(":total",$total);
        $stmt->execute();
        return $conn->lastInsertId();
    }


    static function addProductToOrder($orderId,$productId,$quantity){
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("INSERT INTO `product_has_order`(product_id, order_order_id,quantity) VALUES (:product,:order,:quantity)");
        $stmt->bindParam(":product",$productId);
        $stmt->bindParam(":order",$orderId);
        $stmt->bindParam(":quantity",$quantity);
        $stmt->execute();
        return $conn->lastInsertId();
    }


}