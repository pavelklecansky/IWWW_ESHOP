<section>
    <h2>Shopping cart</h2>
    <?php

    if (isset($_SESSION["cart"])){


    $totalPrice = 0;
    foreach ($_SESSION["cart"] as $key => $value) {

        $item = $catalog[Utils::getBy("id", $key, $catalog)];
        $totalPrice = $totalPrice + ($value["quantity"] * $item["price"]);
        echo '
<div class="cart-item">
<div class="cart-img">
' . $item["img"] . '
</div>
<div>
' . $item["product_name"] . '
</div>
<div class="cart-control">
<div class="cart-price">
' . $item["price"] . '
</div>
<div class="cart-quantity">
' . ($value["quantity"]) . '
</div>
<div class="cart-quantity">
' . ($value["quantity"] * $item["price"]) . '
</div>
<a href="index.php?action=add&id=' . $item["id"] . '" class="cart-button">
+
</a>
<a href="index.php?action=remove&id=' . $item["id"] . '" class="cart-button">
-
</a>
<a href="index.php?action=delete&id=' . $item["id"] . '" class="cart-button">
x
</a>
</div>
</div>';

    }

    echo "<div id='cart-total-price'>Total price: $totalPrice</div>";
    }
    ?>
    <a href="./includes/order.inc.php"><button>Vytvořit objednávku</button></a>
</section>