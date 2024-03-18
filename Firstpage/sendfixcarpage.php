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
        <a href="fixcar.php"><button class="button">บริการ</button></a>
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
  <div class="form-container">
    <div class="input-group">
      <label for="custname" class="required">ชื่อลูกค้า</label>
      <input type="text" id="custname" name="custname" required>
    </div>
    <div class="input-group">
      <label for="phone" class="required">เบอร์โทรติดต่อ</label>
    <input type="tel" id="phone" name="phone" required>
    </div>
    <div class="input-group">
      <label for="carid" class="required">หมายเลขทะเบียนรถ</label>
      <input type="text" id="carid" name="carid" required>
    </div>
    <br>
    <button type="submit" class="button-red">ส่งซ่อม</button>
    <a href="Mainpage.php"><button class="button-gray">ย้อนกลับ</button></a>
   </div>
  </form>

</body>
</html>
