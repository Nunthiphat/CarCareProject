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
        <link rel="stylesheet" href="part.css">
    </head>
    <body>
        <header>
            <?php
                include("Topheader.php");
            ?>
        </header>
        <h1>ข้อมูลรับเข้าอะไหล่รถยนต์</h1>
        <form action="partaction.php" method="post">
        <?php
            if(isset($_SESSION["partorderid"])){
                foreach($_SESSION["partorderid"] as $x) {
                    $partOrderID = $x["PIOID"];
                    $Datereport = $x["PartInDate"];
                    $partname = $x["PartName"];
                    $partid = $x["PartID"];
                    $AmountLeft = $x["AmountLeft"];
                    $CarID = $x["Carlisenplate"];
                    $OrderAmount = $x["AmountOrder"];
                }
            } else {
                $partOrderID = "";
                    $Datereport = "";
                    $partname = "";
                    $partid =  "";
                    $AmountLeft =  "";
                    $CarID = "";
                    $OrderAmount = "";
            }
        ?>
            <div Class="Main">
                <div class="container">
                    <div>
                        <label for="partOrderID">รหัสรับเข้าสินค้า</label>
                        <div class="serch">
                            <input type="text" name="partOrderID" value="<?= $partOrderID ?>">
                            <button type="submit" name="serch" class="blmm">ค้นหา</button>
                        </div>
                    </div>
                    <div>
                        <label for="Datereport">วันที่แจ้งซ้อม</label>
                        <input type="date" name="Datereport" value="<?= $Datereport ?>">
                    </div>
                    <div>
                        <label for="partname">ชื่อสินค้า</label>
                        <input type="text" name="partname" value="<?= $partname ?>">
                    </div>
                    <div>
                        <label for="partID">รหัสอะไหล่</label>
                        <input type="text"name="partid" value="<?= $partid ?>">
                    </div>
                    <div>
                        <label for="AmountLeft">จำนวนที่เหลือ</label>
                        <input type="text" name="AmountLeft" value="<?= $AmountLeft ?>">
                    </div>
                    <div>
                        <label for="CarID">รหัสรสยนต์</label>
                        <input type="text"name="CarID" value="<?= $CarID ?>">
                    </div>
                    <div>
                        <label for="OrderAmount">จำนวนที่สั่ง</label>
                        <input type="text" name="OrderAmount" value="<?= $OrderAmount ?>">
                    </div>
                </div>
                <div class="BTN">
                    <div>
                        <button type="submit" name="add" class="blmm">เพิ่ม</button>
                    </div>
                    <div>
                        <button type="submit" name="update" class="blmm">แก้ไข</button>
                    </div>
                    <div>
                        <button type="submit" name="save" class="blmm">บันทึก</button>
                    </div>
                    <div>
                        <button type="submit" name="print" class="blmm">พิมพ์</button>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>