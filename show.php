<html>
<head>
<title>ITF Lab</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<div class="container">
  <table width="600" border="1" class="table table-hover" class="center">
    <tr>
      <th width="100"> <div align="center">Name</div></th>
      <th width="350"> <div align="center">Comment </div></th>
      <th width="150"> <div align="center">Action</div></th>
    </tr>
  <?php
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><?php echo $Result['name'];?></div></td>
      <td><?php echo $Result['Comment'];?></td>
      <td><center><a href="form_edit.html"><input type="submit" value="Edit" class="btn btn-warning"></a>&nbsp;<a href="form_delete.html"><input type="submit" value="Delete"  class="btn btn-danger"></a></center></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <center><a href="form_insert.html"><input type="submit" value="Insert" class="btn btn-info"></a></center>
  <?php
  mysqli_close($conn);
  ?>
</div>
</body>
</html>
