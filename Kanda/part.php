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
                    $partOrderID = $x["PORID"];
                    $partname = $x["partName"];
                    $partprice = $x["partprice"];
                    $OrderAmount = $x["OrderAmount"];
                    $carlisenplaye = $x["Carlisenplate"];
                }
            } else {
                    $partOrderID = "";
                    $partname = "";
                    $partprice = "";
                    $OrderAmount = "";
                    $carlisenplaye = "";
                
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
                        <label for="partName">ชื่ออะไหล่</label>
                        <input type="text" name="partName" value="<?= $partname ?>">
                    </div>
                    <div>
                        <label for="partprice">ราคา</label>
                        <input type="text" name="partprice" value="<?= $partprice ?>">
                    </div>
                    <div>
                        <label for="Amount">จำนวน</label>
                        <input type="text" name="Amount" value="<?= $OrderAmount ?>">
                    </div>
                    <div>
                        <label for="PartAddDate">วันเพิ่มอะไหล่</label>
                        <input type="date" name="PartAddDate">
                    </div>
                    <div>
                        <label for="Carlisenplate">รหัสป้ายรถ</label>
                        <input type="text" name="Carlisenplate" value="<?= $carlisenplaye ?>">
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