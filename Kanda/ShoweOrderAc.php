<?php
    include ("dtb.php");
    session_start();

    if(isset($_POST["Add"])){
        echo "add";
    } else {
        // echo "hee";
        $sql = "SELECT * FROM `partorder`;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:ShowOrder.php?error=StmtFaild?$stmt");
            exit();
            // print_r($stmt);
        }                                                  
        if (!mysqli_stmt_execute($stmt)) {
            header("location:car.php?error=Fail?$stmt");    
            exit();
            // print_r($stmt);
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
            $_SESSION["OrderData"] = $Arrays;
            mysqli_close($conn);
            header("location:ShowOrder.php?serch");
            exit();
        } else {
            header("location:ShowOrder.php?error=NoDataFound");
            exit();
        }
    }
?>