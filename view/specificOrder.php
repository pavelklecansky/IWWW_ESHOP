<?php require_once "./includes/config.php";

if (!isset($_GET["id"])) {
    header("location: ./index.php");
    exit();
}

$row = ProductRepository::getAllByOrder($_GET["id"]);
if (!isset($row)) {
    header("location: ./index.php");
    exit();
}

?>


<section>
    <h2>Specific order <?php  echo  $_GET["id"]?></h2>


    <?php
    foreach ($row as $key => $value) {
        extract($value);
        echo '
<div class="catalog-item">
<div class="catalog-img">
' . $img . '
</div>
<h3>
' . $product_name . '
</h3>
<div>
' . $price . '
</div>

</div>';


    }
    ?>

</section>