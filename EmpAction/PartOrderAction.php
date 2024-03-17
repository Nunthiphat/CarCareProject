<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartOrder</title>
</head>
<body>
<?php
    session_start();
    $PartName = $_POST["partname"];
    $Amount= $_POST["orderamount"];
    $Plate = $_POST["carplate"];
    $conn = mysqli_connect("localhost","root","","hiwkao");
    $sql = "INSERT INTO partorder (PORID, partName, OrderAmount, Carlisenplate) VALUES (NULL, '$PartName', $Amount, '$Plate')";
    $php = mysqli_query($conn,$sql);
    header("refresh:1; url=PartOrder.php")
?>
</body>
</html>