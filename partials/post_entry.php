<?php
session_start();
include('config.php');
if(!isset($_SESSION['UserID'])){
    header('Location: welcome.php');
    exit();
}

if(isset($_POST['title'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $title = $link->real_escape_string($title);
    $content = $link->real_escape_string($content);
    $UserID = $_SESSION['UserID'];
    $date = createdAt('Y-m-d G:i:s');
    $content = htmlentities($content);

    if($title && $content){
        $query = $link->query("INSERT INTO entries (UserID, title, content, createdAt) VALUES('$UserID', '$title', '$content', '$createdAt')");
        if($query){
            echo "post added";
        }else{
            echo "error";
        }
    }else{
        echo "missing data";
    }
        
    }


?>



