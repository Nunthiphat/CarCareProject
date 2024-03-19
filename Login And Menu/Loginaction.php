<?php 

session_start();
include('Connection.php');

$Email = $_POST['Email'];
$Password = $_POST['Password'];

echo $Email ;

$sql = "SELECT * FROM userdata WHERE email = '$Email' ";

$result = mysqli_query($conn , $sql);
$data = mysqli_fetch_array($result) ;

if($data['email'] != $Email) {

    $_SESSION['error'] = "ไม่มีอีเมลนี่ในระบบ";
    header('location:Login.php');

}elseif($data['password'] != $Password) {

    $_SESSION['error'] = "รหัสไม่ถูกต้อง";
    header('location:Login.php');

}else{
    // อย่าลืมเปลี่ยนหน้าที่ต้องการไป
    $_SESSION['EmpID'] = $data['EmpID'] ;
    header('location:#');
}

?>