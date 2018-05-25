
<?php

include('config.php');

$result = mysqli_query($link,"SELECT * FROM entries");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>title</th>
<th>content</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['content'] . "</td>";
echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
echo '<td><a href="welcome.php?id=' . $row['id'] . '">Delete</a></td>';
 
echo "</tr>";

}
echo "</table>";

//include('delete.php');
//include('edit.php');

mysqli_close($link);


?>

