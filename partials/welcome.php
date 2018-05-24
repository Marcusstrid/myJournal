
<?php
session_start();


 //include('post_entry.php');
 include('config.php');
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
     
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>
    </div>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>

    <div id="wrapper">
         <div id ="content">
             <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
             <label>Title:</label><input type="text" name="title"/>
             <label for="content">Content:</label>
             <textarea name="content" cols=40 rows=10></textarea>
             <br />
             <input type="submit" name="submit" value="Submit">
              </form>
         </div>
    </div>
</body>
</html>





<?php


// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$content = mysqli_real_escape_string($link, $_REQUEST['content']);

// attempt insert query execution
$sql = "INSERT INTO entries (title, content) VALUES ('$title', '$content')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="title">title:</label>
        <input type="text" name="title" id="title">
    </p>
    <p>
        <label for="content"> content:</label>
        <input type="text" name="content" id="content">
    </p>
  
    <input type="submit" value="Submit">
</form>
</body>
</html>






<?php include(get_all_entries.php);  ?>
