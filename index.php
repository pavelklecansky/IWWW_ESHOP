<?php require_once "./includes/config.php";


$catalog = ProductRepository::getAll();



if (isset($_GET["action"])) {
    if ($_GET["action"] == "add" && !empty($_GET["id"])) {
        CartController::addToCart($_GET["id"]);
        header("Location: ".$_SERVER['PHP_SELF']);
    }

    if ($_GET["action"] == "remove" && !empty($_GET["id"])) {
        CartController::removeFromCart($_GET["id"]);
        header("Location: ".$_SERVER['PHP_SELF']);

    }

    if ($_GET["action"] == "delete" && !empty($_GET["id"])) {
        CartController::deleteFromCart($_GET["id"]);
        header("Location: ".$_SERVER['PHP_SELF']);
    }
}


?>

<html>
<head>
    <title>ESHOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require_once "./template/navigation.php" ?>
<?php
# vykreslení obsahu
if (isset($_GET["page"])){
    $pathToFile = "./view/" . $_GET["page"] . ".php";
    if (file_exists($pathToFile)) {
        include $pathToFile;
    } else {
        include "./view/catalog.php";
    }
}else{
    include "./view/catalog.php";
}

?>


</body>
</html>