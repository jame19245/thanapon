<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'thanapon-226.mysql.database.azure.com', 'Jame@thanapon-226', 'thanapon-19245', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1" ><center>
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link</div></th>
    <th width="150"> <div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><a href="form_edit.html"><input type="submit" value="Edit"></a><a href="form_delete.html"><input type="submit" value="Delete"></a></td>
  </tr>
<?php
}
?>
</center></table>
<?php
mysqli_close($conn);
?>
</body>
</html>
