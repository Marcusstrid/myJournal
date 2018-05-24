
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
<form action="welcome.php" method="post">
    <p>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
    </p>
    <p>
        <label for="content"> Content:</label>
        <textarea type="text" name="content" id="content" cols=40 rows=10></textarea>
    </p>
  
    <input type="submit" value="Submit">
</form>


<?php  include('get_all_entries.php')?>



</body>
</html>






