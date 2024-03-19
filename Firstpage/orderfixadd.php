<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hiwkao";

$conn = new mysqli($servername, $username, $password, $dbname);



// Get form data
$custname = $_POST['custname'];
$phone = $_POST['phone'];
$carlisenplate = $_POST['carlisenplate'];
$cardamage = $_POST['cardamage'];
$cartype = $_POST['cartype'];
$carcolor = $_POST['carcolor'];

// Insert into customerfixorder
$sql_customer = "INSERT INTO costomer (CosName, CosPhone) VALUES (?, ?)";
$stmt_customer = $conn->prepare($sql_customer);
$stmt_customer->bind_param("ss", $custname, $phone);
$stmt_customer->execute();

// Get customer ID
$cosid = $conn->insert_id;

// Insert into car
$sql_car = "INSERT INTO car (Carlisenplate, Cardamage, Cartype, Carcolor, COSID) VALUES (?, ?, ?, ?, ?)";
$stmt_car = $conn->prepare($sql_car);
$stmt_car->bind_param("sssss", $carlisenplate, $cardamage, $cartype, $carcolor, $cosid);
$stmt_car->execute();

// Get current date
$date = date("Y-m-d");

// Insert into fixorder
$sql_fixorder = "INSERT INTO fixorder (Date, COSID, Carlisenplate) VALUES (?, ?, ?)";
$stmt_fixorder = $conn->prepare($sql_fixorder);
$stmt_fixorder->bind_param("sss", $date, $cosid, $carlisenplate);
$stmt_fixorder->execute();

// Close statements and connection
$stmt_customer->close();
$stmt_car->close();
$stmt_fixorder->close();
$conn->close();

// Success message
$message = "ได้ทำการแจ้งซ่อมรถแล้ว";
$encoded_message = htmlentities($message);

?>

<script>
  alert("<?php echo $encoded_message; ?>");
  window.location.href = "Mainpage.php";
</script>

<?php


?>