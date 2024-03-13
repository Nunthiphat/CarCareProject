<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddBill</title>
</head>
<body>
    <form action="BillAddAction.php" method="post">
        <label for="custName">ชื่อลูกค้า</label>
        <input type="text" required name="Cos_Name" placeholder="ชื่อลูกค้า"></input>
        <label for="custName">ป้ายทะเบียน</label>
        <input type="text" required name="Car_lisenplate" placeholder="ป้ายทะเบียน"></input>
        <label for="custName">อะไหล่ที่ใช้</label>
        <input type="text" required name="Part_Used" placeholder="อะไหล่ที่ใช้"></input>
        <label for="custName">ค่าใช้จ่าย</label>
        <input type="text" required name="Price" placeholder="ราคาสุทธิ์"></input>
        <button type="Submit" name="Add">เพิ่มใบเสร็จ</button>
    </form>
</body>
</html>