<?php
    include ("dtb.php");
    session_start();

    if(isset($_POST["add"])){
        // echo "add";
        if(isset($_POST["Datereport"], $_POST["partname"], $_POST["partid"],  $_POST["AmountLeft"], $_POST["CarID"], $_POST["OrderAmount"]) 
        && !empty($_POST["Datereport"]) && !empty($_POST["partname"]) && !empty($_POST["partid"]) && !empty( $_POST["AmountLeft"]) && 
        !empty($_POST["CarID"]) && !empty($_POST["OrderAmount"])){
            $Datereport = $_POST["Datereport"];
            $partname = $_POST["partname"];
            $partid = $_POST["partid"];
            $AmountLeft = $_POST["AmountLeft"];
            $CarID = $_POST["CarID"];
            $OrderAmount = $_POST["OrderAmount"];

            $sql = "INSERT INTO `partinorder` (`PIOID`, `PartID`, `PartName`, `AmountLeft`, `AmountOrder`, `PartInDate`, `Carlisenplate`) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location:part.php?error=StmtFaild");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "isiiss", $partid, $partname, $AmountLeft, $OrderAmount, $Datereport, $CarID);                                                      
            if (!mysqli_stmt_execute($stmt)) {
                header("location:car.php?error=InsertFailed?$stmt");    
                exit();
            }
            header("location:part.php?update");
            exit();

        } else {
            header("location:part.php?error=EmptyData");
            exit();
        }
    }
    elseif(isset($_POST["update"])){
        // echo "update";
        if(isset($_POST["partOrderID"]) && !empty($_POST["partOrderID"])){
            $partOrderID = $_POST["partOrderID"];
        }
        if(isset($_POST["Datereport"], $_POST["partname"], $_POST["partid"], $_POST["AmountLeft"], $_POST["CarID"], $_POST["OrderAmount"])
        && !empty($_POST["Datereport"]) && !empty($_POST["partname"]) && !empty($_POST["partid"]) && !empty($_POST["AmountLeft"]) &&
        !empty($_POST["CarID"]) && !empty($_POST["OrderAmount"])){
            $Datereport = $_POST["Datereport"];
            $partname = $_POST["partname"];
            $partid = $_POST["partid"];
            $AmountLeft = $_POST["AmountLeft"];
            $CarID = $_POST["CarID"];
            $OrderAmount = $_POST["OrderAmount"];

            $sql = "UPDATE `partinorder` SET `PartID` = ?, `PartName` = ?, `AmountLeft` = ?, `AmountOrder` = ?, `PartInDate` = ?, `Carlisenplate` = ? WHERE `partinorder`.`PIOID` = ?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location:part.php?error=StmtFaild");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "isiissi", $partid, $partname, $AmountLeft, $OrderAmount, $Datereport, $CarID, $partOrderID);                                                      
            if (!mysqli_stmt_execute($stmt)) {
                header("location:car.php?error=InsertFailed?$stmt");    
                exit();
            }
            unset($_SESSION["partorderid"]);
            header("location:part.php?Update");
            exit();
        } else {
            header("location:part.php?error=EmptyData");
            exit();
        }
    }
    elseif(isset($_POST["save"])){
        echo "save";
    }
    elseif(isset($_POST["serch"])){
        unset($_SESSION["partorderid"]);
        if(isset($_POST["partOrderID"]) && !empty($_POST["partOrderID"])){
            $partOrderID = $_POST["partOrderID"];

            $sql = "SELECT * FROM `partinorder` WHERE `partinorder`.`PIOID` = ?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location:part.php?error=StmtFaild");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "i", $partOrderID);                                                      
            if (!mysqli_stmt_execute($stmt)) {
                header("location:car.php?error=InsertFailed?$stmt");    
                exit();
            }
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
                $_SESSION["partorderid"] = $Arrays;
                header("location:part.php?serch");
                exit();
            } else {
                header("location:part.php?error=NoDataFound");
                exit();
            }
        } else {
            header("location:part.php?error=EmptyData");
            exit();
        }
    }
    elseif(isset($_POST["print"])){
        echo "print";
    }
?>