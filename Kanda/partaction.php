<?php
    include ("dtb.php");
    session_start();

    if(isset($_POST["add"])){
        // echo "add";
        if(isset($_POST["partName"], $_POST["partprice"], $_POST["Amount"], $_POST["PartAddDate"], $_POST["Carlisenplate"]) 
        && !empty($_POST["partName"]) && !empty($_POST["partprice"]) && !empty($_POST["PartAddDate"]) && !empty($_POST["Carlisenplate"])){
            
            $partName = $_POST["partName"];
            $partprice = $_POST["partprice"];
            $Amount = $_POST["Amount"];
            $PartAddDate = $_POST["PartAddDate"];
            $Carlisenplate = $_POST["Carlisenplate"];

            $sql = "INSERT INTO `part` (`PARTID`, `partName`, `partprice`, `Amount`, `PartAddDate`, `Carlisenplate`) VALUES (NULL, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location:part.php?error=StmtFaild");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "siiss", $partName, $partprice, $Amount, $PartAddDate, $Carlisenplate);                                                  
            if (!mysqli_stmt_execute($stmt)) {
                $error_message = mysqli_stmt_error($stmt);
                header("location:part.php?error=InsertFailed&message=" . urlencode($error_message));
                exit();

            }
            header("location:part.php?ADD");
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
            
            $sql = "SELECT a.PARTID, a.partName, a.partprice, c.PORID, c.OrderAmount, c.Carlisenplate  FROM `part` AS a, `partorder` AS c WHERE c.partName = a.partName AND c.PORID = ?;";
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