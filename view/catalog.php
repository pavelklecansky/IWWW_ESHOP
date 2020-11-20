<section id="catalog-items">

    <?php


    foreach ($catalog as $item) {
        echo '
<div class="catalog-item">
<div class="catalog-img">
' . $item["img"] . '
</div>
<h3>
' . $item["product_name"] . '
</h3>
<div>
' . $item["price"] . '
</div>
<a href="index.php?action=add&id=' . $item["id"] . '" class="catalog-buy-button">
Buy
</a>
</div>';

    }

    ?>
</section>