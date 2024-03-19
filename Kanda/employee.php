<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
    <head>
        <link rel="stylesheet" href="employee.css">
    </head>
    <body>
    <header>
        <?php
            include("Topheader.php");
        ?>
    </header>
        <h1>ข้อมูลพนักงาน</h1>
        <?php
            if(isset($_SESSION["empdata"])){
                foreach ($_SESSION["empdata"] as $x){
                    $empid = $x["EMPID"];
                    $empname = $x["EmpName"];
                    $emptel = $x["EmpPhone"];
                    $empaddress = $x["EmpAdress"];
                }
            } else {
                $empid = "";
                $empname = "";
                $emptel = "";
                $empaddress = "";
            }
        ?>
        <div>
        <form action="employeeaction.php" method="Post">
            <div class="container">
                <div>
                    <label for="serchemp">ค้นหาชื่อพนักงาน</label>
                    <div class="serch">
                        <input type="text" name="serchemp" placeholder="ใส้ชื่อพนักงาน">
                        <button type="submit" name="serch" class="blmm">ค้นหา</button>
                    </div>
                </div>
                <div class="tall">
                    <img src="log.png" alt="empimg" class="empimg">
                </div>
                <div>
                    <label for="empid">รหัสพนักงาน</label>
                    <input type="text"name="empid" value="<?= $empid ?>">
                </div>
                <div>
                    <label for="empname">ชื่อลูกพนักงาน</label>
                    <input type="text" name="empname" value="<?= $empname ?>">
                </div>
                <div>
                    <label for="tel">เบอร์โทรศัพท์</label>
                    <input type="tel"name="tel" value="<?= $emptel ?>">
                </div>
                <div>
                    <label for="salary">ที่อยู่</label>
                    <input type="text"name="address" value="<?= $empaddress ?>">
                </div>
            </div>
            <div class="BTN">
                <div class="box"></div>
                <div>
                    <button type="submit" name="add" class="blmm">เพิ่ม</button>
                </div>
                <div>
                    <button type="submit" name="delete" class="blmm">ลบ</button>
                </div>
                <div>
                    <button type="submit" name="change" class="blmm">แก้ไข</button>
                </div>
            </div>
        </form>
        </div>
    </body>
</html>