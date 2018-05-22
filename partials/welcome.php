
<?php
session_start();


 include('..config.php');
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}


if(isset($_POST['title'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $title = $db->real_escape_string($title);
    $content = $db->real_escape_string($content);
    $userID = $_SESSION['userID'];
    $date = createdAt('Y-m-d G:i:s');
    $content = htmlentities($content);

    if($title && $content){
        $query = $db->query("INSERT INTO entries (userID, title, content, createdAt) VALUES('$userID', '$title', '$content', '$createdAt')");
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

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
   

        
    
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>
    </div>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>


    <div id="wrapper">
         <div id ="content">
             <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
             <label>Title:</label><input type="text" name="title"/>
             <label for="content">Content:</label>
             <textarea name="content" cols=50 rows=10></textarea>
             <br />
             <input type="submit" name="submit" value="Submit">
              </form>
         </div>
    </div>
</body>
</html>