<?php
    if(isset($_POST["Submit"])){
        if(!empty($_POST["a"]) && isset($_POST["a"])){
           echo "A IS SET<br>";
           $A = $_POST["a"];
           echo "A = ".$A."<br>";
        } else {
            echo "A NOT SET";
        }
        echo " sub IS set";
    } else {
        if(!empty($_POST["a"]) && isset($_POST["a"])){
            echo "A IS SET<br>";
            echo "A = ".$A."<br>";
         } else {
             echo "A NOT SET";
         }
         echo " sub NOT set";
    }
?>