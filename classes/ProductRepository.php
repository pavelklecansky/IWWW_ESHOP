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
}