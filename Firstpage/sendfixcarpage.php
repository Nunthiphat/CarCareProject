<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiwKao Fix Car</title>
    <link rel="stylesheet" href="StyleforSendfixcar.css"> 
</head>
<body>
<header>
    <div class="box-header">
      <div class="img-main">
        <label for="Icon" class="text-icon">H I W K A O</label>
        <img class="Icon" src="Icon2.png" alt="Icon">
      </div>

      <div class="box-menu">
        <a href="Mainpage.php"><button class="button">หน้าแรก</button></a>
        <a href="call.php"><button class="button">ติดต่อ</button></a>
        <a href="login.php"><button class="button">Login</button></a>
      </div>
    </div>
  </header>
  <?php
    $bgImage = 'backgroundwelcome.png';
  ?>    
  <div class="welcome-container">
    <br>
    <h1 style="text-align: center;"><br><br>H I W K A O<br><br><br>แจ้งซ้อมรถ</h1>
    <img src="<?php echo $bgImage; ?>" alt="Welcome background" class="welcome-bg">
  </div>    

  <form action="orderfixadd.php" method="post" class="form-container">
  <div class="container">
  <form action="orderfixadd.php" method="post" class="form-container">
    <div class="form-container">
      <br><br><label style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold;">โปรดใส่ข้อมูล</label><br>
      <br><br><label for="custname" class="required">ชื่อลูกค้า *</label><br>
      <input type="text" id="custname" name="custname" class="form-control" required><br>

      <label for="phone" class="required">เบอร์โทรติดต่อ *</label><br>
      <input type="tel" id="phone" name="phone" class="form-control" required><br>

      <label for="carlisenplate" class="required">หมายเลขทะเบียนรถ *</label><br>
      <input type="text" id="carlisenplate" name="carlisenplate" class="form-control" required><br>

      <label for="cardamage" class="required">อาการของรถ *</label><br>
      <input type="text" id="cardamage" name="cardamage" class="form-control" required><br>

      <label for="cartype" class="required">ยี่ห้อรถ *</label><br>
      <input type="text" id="cartype" name="cartype" class="form-control" required><br>

      <label for="carcolor" class="required">สีของรถ *</label><br>
      <input type="text" id="carcolor" name="carcolor" class="form-control" required><br><br>

      <div class="button-container">
        <button type="submit" class="button-red">ส่งซ่อม</button>
        <button onclick="window.location.href='Mainpage.php';" button class="button-gray">ย้อนกลับ</button>
      </div>
    </div>
  </form>
</div>

  </form>

</body>
</html>
