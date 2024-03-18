<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hiwkao";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO customerfixorder (CustName, Phone, CARID) VALUES (?, ?, ?)";

$custname = $_POST['custname'];
$phone = $_POST['phone'];
$carid = $_POST['carid'];


$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $custname, $phone, $carid);

$stmt->execute();


$message = "ได้ทำการแจ้งซ่อมรถแล้ว";
$encoded_message = htmlentities($message);

?>

<script>
  alert("<?php echo $encoded_message; ?>");
  window.location.href = "Mainpage.php";
</script>

<?php

$stmt->close();
$conn->close();

?>