<?php
    session_start();
    include("Topheader.php");
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
    <link rel="stylesheet" href="PartReceiveList.css">

    <script>
function searchTable() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementsByTagName("table")[0];
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>


</head>
<body>
    <table>
        
    <div class="search-container">
        <input type="text" id="myInput" class="search-box" placeholder="ค้นหาชื่ออะไหล่...">
        <button type="button" class="search-button" onclick="searchTable()">ค้นหา</button>
    </div>

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