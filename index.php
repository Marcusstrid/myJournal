<?php require_once 'head.php';

if (!isset($_SESSION["loggedIn"])); ?>
<form action="partials/login.php" method="POST">
    <input type="text" placeholder="username" name="username"/>
    <input type="text" placeholder="password" name="password"/>
    <input type="submit" value="Skicka" />
</form>