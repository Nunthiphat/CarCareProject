<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
    <head>
        <link rel="stylesheet" href="car.css">
    </head>
    <body>
    <?php
            if(isset($_SESSION["cardata"])){
                foreach ($_SESSION["cardata"] as $x){
                    $Carlisenplate = $x["Carlisenplate"];
                    $cardamage = $x["cardamage"];
                    $carname = $x["carname"];
                    $carcolor = $x["carcolor"];
                    $CosName = $x["CosName"];
                    $carin = $x["carin"];
                    $Datein = $x["Datein"];
                }
            } else {
                    $Carlisenplate = "";
                    $cardamage = "";
                    $carname = "";
                    $carcolor = "";
                    $CosName = "";
                    $carin = "";
                    $Datein = "";
            }
        ?>
        <header>
            <?php
                include("Topheader.php");
            ?>
        </header>
        <h1>ข้อมูลรถยนต์</h1>
        <div class="Main">
        <form action="carAction.php" method="post">
            <div class="container">
                <div>
                    <label for="cosname">ค้าหาชื่อเจ้าของรถ</label>
                    <div class="serch">
                        <input type="text" name="cosname" value="<?= $CosName ?>">
                        <button type="submit" name="serch" class="blmm">ค้นหา</button>
                    </div>
                </div>
                <div>
                    <label for="Datein">วันที่เเจ้งซ่อม</label>
                    <input type="date" name="Datein" value="<?= $Datein ?>">
                </div>
                <div>
                    <label for="carid">รหัสรถยนต์</label>
                    <input type="text" name="carid" value="<?= $Carlisenplate ?>">
                </div>
                <div>
                    <label for="carin">วันที่มอบรถ</label>
                    <input type="date"name="carin" value="<?= $carin ?>">
                </div>
                <div>
                    <label for="carbrand">ยี่ห้อรถ</label>
                    <input type="text" name="carbrand" value="<?= $carname ?>">
                </div>
                <div class="tall">
                    <label for="detail">รายละเอียดที่ต้องซ่อม</label>
                    <textarea name="detail"><?= $cardamage ?></textarea>
                </div>
                <div>
                    <label for="carcolor">สี</label>
                    <input type="text" name="carcolor" value="<?= $carcolor ?>">
                </div>
                </div>
                <div class="BTN">
                    <div class="box"></div>
                    <div>
                        <button type="submit" name="add" class="blmm">เพิ่ม</button>
                    </div>
                    <div>
                        <button type="submit" name="change" class="blmm">แก้ไข</button>
                    </div>
                    <div>
                        <button type="submit" name="save" class="blmm">บันทึก</button>
                    </div>
                    <div>
                        <button type="submit" name="print" class="blmm">พิมพ์ข้อมูล</button>
                    </div>
                </div>
        </form>
        </div>
    </body>
</html>