<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
if(isset($_GET['id']))
{
$id = $_GET['id'];
}
else
{
exit();
}
mysql_select_db("vul", $con);

$result = mysql_query("SELECT * FROM sqli where id=$id");
echo mysql_error();
echo "<table border='1'>
<tr>
<th>id</th>
<th>Text</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['text'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
