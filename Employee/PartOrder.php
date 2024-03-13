<?php
    session_start();

    $conn = mysqli_connect("localhost","root","","hiwkao");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartOrder</title>
</head>
<body>
    <form action="PartOrderAction.php" method="post">
        <label for="custName">ชื่ออะไหล่</label>
        <input type="text" required name="partname" placeholder="ชื่ออะไหล่"></input>
        <label for="custName">จำนวนที่ต้องการ</label>
        <input type="text" required name="orderamount" placeholder="จำนวน"></input>
        <label for="custName">ป้ายทะเบียนรถ</label>
        <input type="text" required name="carplate" placeholder="ป้ายทะเบียน"></input>
        <button type="submit" name="Add">เพิ่มรายการ</button>
    </form>
</body>
</html>