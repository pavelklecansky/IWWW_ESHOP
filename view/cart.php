<section>
    <h2>Shopping cart</h2>
    <?php

    $totalPrice = 0;
    foreach ($_SESSION["cart"] as $key => $value) {

        $item = $catalog[getBy("id", $key, $catalog)];
        $totalPrice = $totalPrice + ($value["quantity"] * $item["price"]);
        echo '
<div class="cart-item">
<div class="cart-img">
' . $item["img"] . '
</div>
<div>
' . $item["name"] . '
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
<a href="/?action=add&id=' . $item["id"] . '" class="cart-button">
+
</a>
<a href="/?action=remove&id=' . $item["id"] . '" class="cart-button">
-
</a>
<a href="/?action=delete&id=' . $item["id"] . '" class="cart-button">
x
</a>
</div>
</div>';

    }

    echo "<div id='cart-total-price'>Total price: $totalPrice</div>";

    ?>
</section>