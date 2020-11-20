<?php


class ProductRepository
{
    static function getAll(): array
    {
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("SELECT * FROM product");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static function getAllByOrder($orderId): array
    {
        $conn = Connection::getPdoInstance();
        $stmt = $conn->prepare("SELECT * FROM product JOIN product_has_order pho on product.id = pho.product_id WHERE order_order_id = :id");
        $stmt->bindParam(":id",$orderId);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}