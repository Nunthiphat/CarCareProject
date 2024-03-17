<?php
    session_start();
    include('Topheader.php');
    
    $conn = mysqli_connect("localhost","root","","hiwkao");
    $sql = "SELECT * FROM fixorder";
    $php = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($php);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="Employee.css">
</head>
<body>
<div class="main-content">
    <h1>ระบบพนักงาน</h1>
    <div class="gray-box">
        <table>
            <tr>
                <th>ชื่อลูกค้า</th>
                <th>เบอร์โทรลูกค้า</th>
                <th>ทะเบียนรถ</th>
                <th>ยี่ห้อรถ</th>
                <th>อาการของรถ</th>
            </tr>
            <tbody>
                <tr>
                <?php
                    if ($result > 0){
                        foreach ($result as $data){
                            $Cosid = $data["COSID"];
                            $sql1 = "SELECT * FROM costomer WHERE COSID = $Cosid";
                            $php1 = mysqli_query($conn,$sql1);
                            $result1 = mysqli_fetch_array($php1);

                            echo "<td>{$result1["CosName"]}</td>";
                            echo "<td>{$result1["CosPhone"]}</td>";
                            echo "<td>{$data["Carlisenplate"]}</td>";

                            $Carlisen = $data["Carlisenplate"];
                            $sql2 = "SELECT * FROM car WHERE Carlisenplate = $Carlisen";
                            $php2 = mysqli_query($conn,$sql2);
                            $result2 = mysqli_fetch_array($php2);

                            echo "<td>{$result2["CarName"]}</td>";
                            echo "<td>{$result2["cardamage"]}</td>";
                        }
                    }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<footer>
    <form action="PartOrder.php">
        <button class="footer-button" type="submit">
            <img src="image 4.png" alt="Icon 1">
            <span>Part Order</span>
        </button>
    </form>

    <form action="PartReceiveList.php">
        <button class="footer-button" type="submit">
            <img src="image 5.png" alt="Icon 2">
            <span>Part Receive</span>
        </button>
    </form>

    <form action="BillAdd.php">
        <button class="footer-button" type="submit">
            <img src="image 7.png" alt="Icon 3">
            <span>Add Bill</span>
        </button>
    </form>
</footer>
</body>
</html>