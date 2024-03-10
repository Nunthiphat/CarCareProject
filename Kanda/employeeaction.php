<?php
    session_start();
    include "dtb.php";
    if(isset($_POST["add"])){
        if(isset($_POST["empname"], $_POST["tel"], $_POST["address"])
        && !empty($_POST["empname"]) && !empty($_POST["tel"]) && !empty($_POST["address"])){
            $empname = $_POST["empname"];
            $tel = $_POST["tel"];
            $address = $_POST["address"];


            $sql = "INSERT INTO `employee` (`EMPID`, `EmpName`, `EmpPhone`, `EmpAdress`) VALUES (NULL, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location:costomer.php?error=StmtFaild");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "sss", $empname, $tel, $address);                                                      
            mysqli_stmt_execute($stmt);
		
            header("location:employee.php?add$empname$tel$address");
            exit();
        } else {
            header("location:employee.php?emptydata");
            exit();
        }
    }
    elseif(isset($_POST["change"])){
        if(isset($_POST["empid"], $_POST["empname"], $_POST["tel"], $_POST["address"])
        && !empty($_POST["empname"]) && !empty($_POST["tel"]) && !empty($_POST["address"])){
            $empid = $_POST["empid"];
            $empname = $_POST["empname"];
            $tel = $_POST["tel"];
            $address = $_POST["address"];

            $sql = "UPDATE `employee` SET `EmpName` = ?, `EmpPhone` = ?, `EmpAdress` = ? WHERE `employee`.`EMPID` = ? ";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location:costomer.php?error=StmtFaild");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "sssi", $empname, $tel, $address, $empid);                                                      
            mysqli_stmt_execute($stmt);
            
            header("location:employee.php?change");
		    exit();
        } else {
            header("location:employee.php?empdata");
		    exit();
        }
    } if(isset($_POST["serch"])){
        if(isset($_POST["serchemp"]) && !empty($_POST["serchemp"])){
            $serchemp = $_POST["serchemp"];
            
            $sql = "SELECT * FROM `employee` WHERE EmpName = ?";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("location:costomer.php?error=StmtFaild");
				exit();
			}
			mysqli_stmt_bind_param($stmt, "s", $serchemp);                                             
			mysqli_stmt_execute($stmt);
			$resultData = mysqli_stmt_get_result($stmt);
			$Arrays = array();
			while($row = mysqli_fetch_assoc($resultData)){
				array_push($Arrays, $row);
			}
			$_SESSION["empdata"] = $Arrays;

			header("location:employee.php?serch");
			exit();
        } else {
            header("location:employee.php?empdata");
		    exit();
        }
    } else {
        header("location:employee.php?eror");
		exit();
    }
?>