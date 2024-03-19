<?php
session_start();
include('Connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "SELECT * FROM employee WHERE EmpEmail = ? AND EmpPassword = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $Email, $Password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['EmpID'] = $data['EmpID'];
        // เปลี่ยนหน้าที่พนักงานไป
        header('location: #');
        exit;
    }

    $sql1 = "SELECT * FROM owner WHERE OwnerEmail = ? AND OwnerPassword = ?";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("ss", $Email, $Password);
    $stmt1->execute();
    $result1 = $stmt1->get_result();

    if ($result1->num_rows > 0) {
        $data1 = $result1->fetch_assoc();
        $_SESSION['OwnerID'] = $data1['OwnerID'];
        // หน้าที่เจ้าของกิจการไป
        header('location: #');
        exit;
    }

    $_SESSION['error'] = "อีเมล หรือ รหัสไม่ถูกต้อง";
    header('location: Login.php');
    exit;
}
?>
