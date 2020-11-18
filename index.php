<?php require_once "./includes/config.php";


$catalog = ProductRepository::getAll();

function getBy($att, $value, $array)
{
    foreach ($array as $key => $val) {
        if ($val[$att] === $value) {
            return $key;
        }
    }
    return null;
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "add" && !empty($_GET["id"])) {
        CartController::addToCart($_GET["id"]);
        header("Location: /");
    }

    if ($_GET["action"] == "remove" && !empty($_GET["id"])) {
        CartController::removeFromCart($_GET["id"]);
        header("Location: /");

    }

    if ($_GET["action"] == "delete" && !empty($_GET["id"])) {
        CartController::deleteFromCart($_GET["id"]);
        header("Location: /");
    }
}


?>

<html>
<head>
    <title>ESHOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
# vykreslení obsahu
$pathToFile = "./view/" . $_GET["page"] . ".php";
if (file_exists($pathToFile)) {
    include $pathToFile;
} else {
    include "./view/catalog.php";
}
?>


</body>
</html>