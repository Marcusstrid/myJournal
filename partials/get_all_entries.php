<?php


$stmt = $link->prepare('SELECT entryID, title, content, createdAt FROM journal WHERE UserID  = :UserID');
$stmt->execute(array(':entryID' => $_GET['id']));
$row = $stmt->fetch();

if($row['entryID'] == ''){
    header('Location: ./welcome.php');
    exit;
}
echo '<div>';
    echo '<h1>'.$row['title'].'</h1>';
    echo '<p>Posted on '.date('jS M Y', strtotime($row['createdAt'])).'</p>';
    echo '<p>'.$row['content'].'</p>';                
echo '</div>';

var_dump($row);
?>