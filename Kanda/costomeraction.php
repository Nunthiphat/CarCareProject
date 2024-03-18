<?php
	session_start();
    include "dtb.php";
    if(isset($_POST["add"])){
        if(isset($_POST["cosname"]) && !empty($_POST["cosname"])){
            $cosname = $_POST["cosname"];
        }
        if(isset($_POST["tel"]) && !empty($_POST["tel"])){
            $tel = $_POST["tel"];
        }
        if(isset($_POST["address"]) && !empty($_POST["address"])){
            $address = $_POST["address"];
        }
        if(isset($_POST["Carlisenplate"]) && !empty($_POST["Carlisenplate"])){
            $Carlisenplate = $_POST["Carlisenplate"];
        }

        $sql = "INSERT INTO `costomer` (`COSID`, `CosName`, `CosPhone`, `CosAdress`, `Carlisenplate`) VALUES (NULL, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:costomer.php?error=StmtFaild");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ssss", $cosname, $tel, $address, $Carlisenplate);                                                      
        mysqli_stmt_execute($stmt);
		header("location:costomer.php?add");
		exit();
    }
    elseif(isset($_POST["change"])){
        if (
            isset($_POST["cosid"], $_POST["cosname"], $_POST["tel"], $_POST["address"], $_POST["Carlisenplate"]) &&
            !empty($_POST["cosid"]) && !empty($_POST["cosname"]) && !empty($_POST["tel"]) && !empty($_POST["address"] && !empty($_POST["Carlisenplate"]))
        ) {
            $cosid = $_POST["cosid"];
            $cosname = $_POST["cosname"];
            $tel = $_POST["tel"];
            $address = $_POST["address"];
            $Carlisenplate = $_POST["Carlisenplate"];
        } else {
            header("location:costomer.php?EmptyValue");
            exit();
        }
        $sql = "UPDATE `costomer` SET `CosName` = ?, `CosPhone` = ?, `CosAdress` = ?, `Carlisenplate` = ? WHERE `costomer`.`COSID` = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:costomer.php?error=StmtFaild");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ssssi", $cosname, $tel, $address, $Carlisenplate ,$cosid);                                                      
        if (!mysqli_stmt_execute($stmt)) {
            header("location:part.php?error=InsertFailed?$stmt");    
            exit();
        }
        unset($_SESSION['cosdata']);
		header("location:costomer.php?update");
		exit();
    }
    elseif(isset($_POST["save"])){
        echo "save";
    }
    elseif(isset($_POST["serch"])){
        if(isset($_POST["serchcos"]) && !empty($_POST["serchcos"])){
            $serchcos = $_POST["serchcos"];
			// echo $serchcos."<br>";
        } else {
            header("location:costomer.php?EmptyValue");
			exit();	
        }
        
		$sql = "SELECT * FROM `costomer` WHERE CosName = ?";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("location:costomer.php?error=StmtFaild");
				exit();
			}
			mysqli_stmt_bind_param($stmt, "s", $serchcos);                                             
			mysqli_stmt_execute($stmt);
			$resultData = mysqli_stmt_get_result($stmt);
            if (!$resultData) {
                header("location:costomer.php?error=QueryFailed");
                exit();
            }
            if (mysqli_num_rows($resultData) > 0) {
                $Arrays = array();
                while ($row = mysqli_fetch_assoc($resultData)) {
                    array_push($Arrays, $row);
                }
                $_SESSION["cosdata"] = $Arrays;
                header("location:costomer.php?serch");
                exit();
            } else {
                header("location:costomer.php?error=NoDataFound");
                exit();
            }
    }
	elseif (isset($_POST["clear"])){
		unset($_SESSION['cosdata']);
		header("location:costomer.php?clear");
		exit();	
	}
?>