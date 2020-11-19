<?php require_once "./includes/config.php";

if ($user->isLogged()) {
    header("location: ./index.php");
    exit();
}

?>
    <div class="login">
        <form method="post" action="./includes/register.inc.php" >

            <label for="username"> Uživatelské jméno</label>
            <input type="text" id="username" name="username" placeholder="Uživatelské jméno" required/>

            <label for="password"> Heslo</label>
            <input type="password" id="username" name="password" placeholder="Heslo" required/>

            <input type="submit" name="submit" value="Registrace" />
        </form>
    </div>

