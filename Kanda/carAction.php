<?php
    session_start();
    include "dtb.php";

    if(isset($_POST["serch"])){
        // echo "serch<br>";
        if(isset($_POST["carid"]) && !empty($_POST["carid"])){
            $carid = $_POST["carid"];
            // o e c Ca Fo PartoRder Part Payment
            $sql = "SELECT * FROM `car` WHERE Carlisenplate = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location:car.php?error=StmtFailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $carid);
            mysqli_stmt_execute($stmt);
            $resultData = mysqli_stmt_get_result($stmt);
            if (!$resultData) {
                header("location:car.php?error=QueryFailed");
                exit();
            }
            if (mysqli_num_rows($resultData) > 0) {
                $Arrays = array();
                while ($row = mysqli_fetch_assoc($resultData)) {
                    array_push($Arrays, $row);
                }
                $_SESSION["cardata"] = $Arrays;
                header("location:car.php?serch");
                exit();
            } else {
                unset($_SESSION["cardata"]);
                header("location:car.php?error=NoDataFound");
                exit();
            }
        } else {
            header("location: car.php?empdata");
            exit();
        }
    }
    elseif(isset($_POST["add"])){
        // echo "add<br>";
        if(isset($_POST["Datein"], $_POST["carid"], $_POST["carin"], $_POST["carbrand"], $_POST["detail"], $_POST["carcolor"], $_POST["cosname"]) 
        && !empty($_POST["Datein"]) && !empty($_POST["carid"]) && !empty($_POST["carin"]) && !empty($_POST["carbrand"]) 
        && !empty($_POST["detail"]) && !empty($_POST["carcolor"] && !empty($_POST["cosname"]))){
            $Datein = $_POST["Datein"];
            $CosName = $_POST["cosname"];
            $Carlisenplate = $_POST["carid"];
            $carin = $_POST["carin"];
            $carbrand = $_POST["carbrand"];
            $detail = $_POST["detail"];
            $carcolor = $_POST["carcolor"];

            $sql = "INSERT INTO `car` (`Carlisenplate`, `cardamage`, `carname`, `carcolor`, `CosName`, `carin`, `Datein`) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location:car.php?error=StmtFailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "issssss", $Carlisenplate, $detail, $carbrand, $carcolor, $CosName, $carin, $Datein);

            if (!mysqli_stmt_execute($stmt)) {
                header("location:car.php?error=InsertFailed?$stmt");    
                exit();
            }
            header("location:car.php?add=$Carlisenplate");
            exit();
            // echo $Datein." ".$carid." ".$carin." ".$carbrand." ".$detail." ".$carcolor;
        } else {
            header("location:car.php?empdata");
            exit();
        }
    }
    elseif(isset($_POST["change"])){
        if(isset($_POST["carid"], $_POST["Datein"], $_POST["cosname"], $_POST["carin"], $_POST["carbrand"], $_POST["detail"], $_POST["carcolor"])
        && !empty($_POST["carid"]) && !empty($_POST["Datein"]) && !empty($_POST["cosname"]) && !empty($_POST["carin"]) && !empty($_POST["carbrand"]) && !empty($_POST["detail"]) && !empty($_POST["carcolor"])){
            
            $carid = $_POST["carid"];
            $Datein = $_POST["Datein"];
            $cosname = $_POST["cosname"];
            $carin = $_POST["carin"];
            $carbrand = $_POST["carbrand"];
            $detail = $_POST["detail"];
            $carcolor = $_POST["carcolor"];

            $sql = "UPDATE `car` SET `Carlisenplate` = ?, `cardamage` = ?, `carname` = ?, `carcolor` = ?, `CosName` = ?, `carin` = ?, `Datein` = ? WHERE `car`.`Carlisenplate` = ?";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location:car.php?error=StmtFailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "ssssssss", $carid, $detail, $carbrand, $carcolor, $cosname, $carin, $Datein, $carid);

            if (!mysqli_stmt_execute($stmt)) {
                header("location:car.php?error=InsertFailed?$stmt");    
                exit();
            }
            unset($_SESSION["cardata"]);
            header("location:car.php?add=$Carlisenplate");
            exit();
        }
    }
    elseif(isset($_POST["save"])){
        echo "save";
    }
    elseif(isset($_POST["print"])){
        echo "print";
    } else {
        echo "error";
    }
?>