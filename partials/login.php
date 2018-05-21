<?php


$birthday = strtotime($_POST['birthday']);
$now = strtotime('now');

$age = round(($now - $birthday)/60/60/24/356);


if($_POST['password'] == "magic word" ){
    echo 'Hej ' . $_POST["username"];
}

?>

<form action="" id="addNewEntry">
    <input type="text" name="EntryTitel" id="NewEntryTitel">
    <input type="text" name="Entry" id="NewEntry"/>
    <input type="submit">
</form>