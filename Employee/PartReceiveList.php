 <?php
    session_start();

    $conn = mysqli_connect("localhost","root","","hiwkao");
    $php = "SELECT * FROM part";
    $sql = mysqli_query($conn, $php);
    $result = mysqli_fetch_array($sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartReceive</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ชื่ออะไหล่</th>
                <th>ราคาสุทธิ์</th>
                <th>จำนวน</th>
                <th>ป้ายทะเบียน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
                if ($result > 0){
                    foreach ($result as $data){
                        echo "<td>{$data["partName"]}</td>";
                        echo "<td>{$data["partPrice"]}</td>";
                        echo "<td>{$data["Amount"]}</td>";
                        echo "<td>{$data["Carlisenplate"]}</td>";
                    }
                }
            ?>
            </tr>
        </tbody>
    </table>
</body>
</html>