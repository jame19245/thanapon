<html>

<head>
    <title>ITF Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        p.ex1 {
            margin-top: 25px;
        }
    </style>
</head>

<body>
    <?php

    $conn = mysqli_init();
    mysqli_real_connect($conn, 'thanapon-226.mysql.database.azure.com', 'Jame@thanapon-226', 'thanapon-19245', 'ITFLab', 3306);
    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }


    $name = $_POST['name'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];


    $sql = "UPDATE itftest SET height='$height' WHERE name='$name'";
    $sql = "UPDATE itftest SET weight='$weight' WHERE name='$name'";

    if (mysqli_query($conn, $sql)) {
        echo "<center>Edit Successfully</center>";
    } else {
        echo "<center>Error: </center>" . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>

    <div class="container">
        <center><a href="itftest.php"><input type="button" value="Show" class="btn btn-info" class="ex1"></a></center>
    </div>
</body>

</html>
