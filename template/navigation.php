<nav id="menu">

    <ul>
        <div>
            <li><a href="./index.php">Katalog</a></li>
            <li><a href="./index.php?page=cart">Košík</a></li>
            <?php
            if ($user->isLogged()) {
                echo '<li><a href="./index.php?page=orders">Objednávky</a></li>';
            }
            ?>


        </div>

        <div>
            <?php
            if ($user->isLogged()) {
                $username = $_SESSION["username"];
                echo "<li><a>$username</a></li>";
                echo ' <li><a href="./includes/logout.php">Odhlásit</a></li>';
            } else {
                echo '<li><a href="index.php?page=login">Přihlasit</a></li> ';
                echo '<li><a href="index.php?page=register">Registrovat</a></li>';
            }

            ?>

        </div>

    </ul>

</nav>