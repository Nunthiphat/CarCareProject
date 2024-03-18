<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
    <head>
        <link rel="stylesheet" href="costomer.css">
    </head>
    <body>
    <header>
            <?php
                include("Topheader.php");
            ?>
        </header>
        <h1>ข้อมูลลูกค้า</h1>
        <form action="costomeraction.php" method="post">
        <?php
                if(isset($_SESSION["cosdata"])){
                    foreach ($_SESSION["cosdata"] as $x){
                        $COSID = $x['COSID'];
                        $CosName = $x['CosName'];
                        $CosPhone = $x['CosPhone'];
                        $CosAdress = $x['CosAdress'];
                        $Carlisenplate = $x["Carlisenplate"];
                    }
                } else {
                    $COSID = "";
                    $CosName = "";
                    $CosPhone = "";
                    $CosAdress = "";
                    $Carlisenplate = "";
                }
                ?>
        <div class="Main">
            <div class="container">
                <div>
                    <label for="serchcos">ค้นหาชื่อลูกค้า</label>
                    <div class="serch">
                        <input type="text" name="serchcos">
                        <button type="submit" name="serch" class="blmm">ค้นหา</button>
                    </div>
                </div>
                    <div class="tall">
                    <img src="log.png" alt="carimg" class="carimg">
                </div>
                <div>
                    <label for="cosid">รหัสลูกค้า</label>
                    <input type="text" name="cosid" value="<?= $COSID ?>">
                </div>
                <div>
                    <label for="cosname">ชื่อลูกค้า</label>
                    <input type="text" name="cosname" value="<?= $CosName ?>">
                </div>
                <div>
                    <label for="tel">เบอร์โทรศัพท์</label>
                    <input type="tel"name="tel" value="<?= $CosPhone ?>">
                </div>
                <div>
                    <label for="Carlisenplate">ที่อยู่ลูกค้า</label>
                    <input type="text"name="address" value="<?= $CosAdress ?>">
                </div>
                <div>
                    <label for="Carlisenplate">รหัสป้ายทะเบียนรถ</label>
                    <input type="text"name="Carlisenplate" value="<?= $Carlisenplate ?>">
                </div>
            </div>
            <div class="BTN">
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
                    <button type="submit" name="clear" class="blmm">ล้าง</button>
                </div>
            </div>
        </div>
    </form>
    </body>
</html>
