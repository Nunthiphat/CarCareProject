<?php include('Topheader.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Report.css">
    <title>Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="Reportaction.php" method="POST" >

         <div class="main-search" >

            <input type="text" name="search" placeholder="Search....." >
            <i class="fa-solid fa-magnifying-glass" id="Icon-search" ></i>
            </div>

        <div class="box-first" >

            <div class="main-title" >
            <label for="title-box" class="box-title" >รายงาน</label>
            </div>

            <div class="show-report" >
                <?php 
                echo "Hello World !!!!!!!!!!!!!!!!!!!!!!!!!!!!!"
                ?>
            </div>

        </div>
    </form>
</body>
</html>