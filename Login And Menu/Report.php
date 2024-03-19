<?php 

include('Topheader.php'); 
include('Connection.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Report1.css">
    <style>
        .button-search {
            background-color: #4CAF50;
            color: white;
            padding: 7px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            border: none;
            transition-duration: 0.4s;
            margin-left: 2%;
        }

        .button-search:hover {
            background-color: #45a049;
        }
    </style>
    <title>Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="Report.php" method="POST">

        <div class="main-search">
            <input type="text" name="search" placeholder="Search.....">
            <i class="fa-solid fa-magnifying-glass" id="Icon-search"></i>
            <button type="submit" class="button-search" name="Search">Search</button>
        </div>

        <div class="box-first">
            <div class="main-title">
                <label for="title-box" class="box-title">รายงาน</label>
            </div>

            <div class="show-report">
                <table class="" >
                    <tr>
                        <th>TotalPrice</th>
                        <th>BillDate</th>
                        <th>CustomerName</th>
                        <th>Carlisenplate</th>
                        <th>PartUsed</th>
                        <th>EmpID</th>
                        <th>Status</th>
                    </tr>

                    <?php 


                    if(isset($_POST['Search'])){

                        $Search = $_POST['search'];
                        $sql = "SELECT * FROM payment INNER JOIN payment_bill ON payment.PBID = payment_bill.PBID AND Carlisenplate = '$Search' ";
                        $result = mysqli_query($conn, $sql);

                        while ($data = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>{$data['totalprice']}</td>";
                            echo "<td>{$data['billdate']}</td>";
                            echo "<td>{$data['CosName']}</td>";
                            echo "<td>{$data['Carlisenplate']}</td>";
                            echo "<td>{$data['PartUsed']}</td>";
                            echo "<td>{$data['EMPID']}</td>";
                            echo "<td>{$data['Status']}</td>";
                            echo "</tr>";
                        }
                    }else {

                        $sql = "SELECT * FROM payment INNER JOIN payment_bill ON payment.PBID = payment_bill.PBID";
                        $result = mysqli_query($conn, $sql);

                        while ($data = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>{$data['totalprice']}</td>";
                            echo "<td>{$data['billdate']}</td>";
                            echo "<td>{$data['CosName']}</td>";
                            echo "<td>{$data['Carlisenplate']}</td>";
                            echo "<td>{$data['PartUsed']}</td>";
                            echo "<td>{$data['EMPID']}</td>";
                            echo "<td>{$data['Status']}</td>";
                            echo "</tr>";
                        }
                        
                    }

                    ?>
                </table>
            </div>
        </div>
    </form>
</body>
</html>
