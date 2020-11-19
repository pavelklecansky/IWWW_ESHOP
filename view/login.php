<?php require_once "./includes/config.php";

if ($user->isLogged()) {
    header("location: ./index.php");
    exit();
}

?>
    <div class="login">
        <form method="post" action="./includes/login.inc.php" >

            <label for="username"> Uživatelské jméno/Email:</label>
            <input type="text" id="username" name="username" placeholder="Uživatelské jméno" required/>

            <label for="password"> Heslo</label>
            <input type="password" id="username" name="password" placeholder="Heslo" required/>

            <input type="submit" name="submit" class="pure-button pure-button-primary" value="Přihlasit" />
        </form>
    </div>

