<?php require_once "./config.php";
$catalog = ProductRepository::getAll();

$id = OrderRepository::insertOrder((int) $_SESSION["userId"]);
foreach ($_SESSION["cart"] as $key => $value) {

    $item = $catalog[Utils::getBy("id", $key, $catalog)];
    $totalPrice = $totalPrice + ($value["quantity"] * $item["price"]);
    OrderRepository::addProductToOrder($id, $item["id"], $value["quantity"]);
}
OrderRepository::updateTotal($id,$totalPrice);
unset($_SESSION['cart']);
header("location: ../index.php");
exit();