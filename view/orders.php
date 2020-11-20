<section>
    <h2>Orders</h2>


    <?php
    $orders = OrderRepository::getAllForUser($_SESSION["userId"]);
    foreach ($orders as $key => $value) {
        extract($value);
        $orderNumber = $value["order_id"];
        echo ' <div class="order-item">';
        echo "<a href='index.php?page=specificOrder&id=$order_id'>Order number $order_id</a>";
        echo "<p>Date $date</p>";
        echo "<p>Total price $totalPrice</p>";
        echo ' </div>';
    }
    ?>

</section>