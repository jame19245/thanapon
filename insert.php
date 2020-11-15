<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'thanapon-226.mysql.database.azure.com', 'Jame@thanapon-226', 'thanapon-19245', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = "INSERT INTO guestbook (name , Comment) VALUES ('$name', '$comment')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo " <a href="show.php">Click here</a>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>

<html>
<head>
    <title>Successfully</title>
</head>
<body>
  <center><a href="form_insert.html"><input type="button" value="Insert" class="btn btn-info"></a></center>
</body>
</html>
