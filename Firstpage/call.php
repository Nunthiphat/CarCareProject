<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiwKao Fix Car</title>
    <link rel="stylesheet" href="headerformainpage.css"> 
    <style>
    </style>
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
    <h1 style="text-align: center;"><br><br><br>H I W K A O</h1>
    <img src="<?php echo $bgImage; ?>" alt="Welcome background" class="welcome-bg">
  </div>    
    <br>
    <br>
    <p style="text-align: center; font-size: 24px;">HiwKao</p><br>
    <p style="text-align: center;">ติดต่อสอบถาม Tal : 090-xxx-xxxx</p><br><br><br>

</body>
</html>