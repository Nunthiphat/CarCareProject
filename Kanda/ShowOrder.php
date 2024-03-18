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
        <?php
            include("Topheader.php");
        ?>
        <link rel="stylesheet" href="ShowOrder.css">
    </head>
    <body>
        <h1>รายการอะไหล่ที่ต้องซื้อ</h1>
        <div>
            <form action="ShowerOrderAc.php" method = "POST"></form>
            <table>
                <tr>
                    <th>PORID</th>
                    <th>partName</th>
                    <th>OrderAmount</th>
                    <th>EMPID</th>
                    <th>Carlisenplate</th>
                    <th>Use</th>
                </tr>
                <?php
                if(isset($_SESSION["OrderData"])){
                    foreach($_SESSION["OrderData"] as $x){
                        echo "<tr>";
                        echo "<td>".$x["PORID"]."</td>";
                        echo "<td>".$x["partName"]."</td>";
                        echo "<td>".$x["OrderAmount"]."</td>";
                        echo "<td>".$x["EMPID"]."</td>";
                        echo "<td>".$x["Carlisenplate"]."</td>";
                        echo "<td><button>Print</button></td>";
                        echo "</tr>";
                    }
                } else {
                    header("location:ShoweOrderAc.php");
                    exit();
                }
                ?>
            </table>
        </div>
    </body>
</html>
