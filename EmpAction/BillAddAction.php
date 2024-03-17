<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddBill</title>
</head>
<body>
<?php
    session_start();
    $CosName = $_POST["Cos_Name"];
    $Plate = $_POST["Car_lisenplate"];
    $PartUsed = $_POST["Part_Used"];
    $Price = $_POST["Price"];
    $conn = mysqli_connect("localhost","root","","hiwkao");
    $sql = "INSERT INTO payment_bill (PBID, CosName, Carlisenplate, PartUsed, totalprice) VALUES (NULL, '$CosName', '$Plate', '$PartUsed', '$Price')";
    $php = mysqli_query($conn,$sql);
    header("refresh:1; url=BillAdd.php")
?>
</body>
</html>