<?php


class CartController
{
    static function addToCart($productId)
    {
        if (!array_key_exists($productId, $_SESSION["cart"])) {
            $_SESSION["cart"][$productId]["quantity"] = 1;
        } else {
            $_SESSION["cart"][$productId]["quantity"]++;
        }
    }

    static function removeFromCart($productId)
    {
        if (array_key_exists($productId, $_SESSION["cart"])) {
            if ($_SESSION["cart"][$productId]["quantity"] <= 1) {
                unset($_SESSION["cart"][$productId]);
            } else {
                $_SESSION["cart"][$productId]["quantity"]--;
            }
        }
    }

    static function deleteFromCart($productId)
    {
        unset($_SESSION["cart"][$productId]);
    }
}