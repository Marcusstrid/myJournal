
<?php

include('config.php');


$result = mysqli_query($link,"SELECT * FROM entries");

echo "<table border='1'>
<tr>
<th>title</th>
<th>content</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['content'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>