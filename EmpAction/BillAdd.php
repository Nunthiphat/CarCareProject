<?php
    session_start();
    include('Topheader.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddBill</title>
    <link rel="stylesheet" href="BillAdd.css">
</head>
<body>
    <form action="BillAddAction.php" method="post">
        <div class="input-main" >

            <div class="input-in" >
            <label for="custName">ชื่อลูกค้า</label>
            <input type="text" required name="Cos_Name" placeholder="ชื่อลูกค้า"></input><br>

            <label for="custName">ป้ายทะเบียน</label>
            <input type="text" required name="Car_lisenplate" placeholder="ป้ายทะเบียน"></input><br>

            <label for="custName">อะไหล่ที่ใช้</label>
            <input type="text" required name="Part_Used" placeholder="อะไหล่ที่ใช้"></input><br>

            <label for="custName">ค่าใช้จ่าย</label>
            <input type="text" required name="Price" placeholder="ราคาสุทธิ์"></input><br>
            </div>

            <button type="Submit" name="Add">เพิ่มใบเสร็จ</button>

        </div>
    </form>
</body>
</html>