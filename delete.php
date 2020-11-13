<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'thanapon-226.mysql.database.azure.com', 'Jame@thanapon-226', 'thanapon-19245', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = "DELETE FROM guestbook WHERE name='$name'";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>
