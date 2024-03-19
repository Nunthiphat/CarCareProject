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
        <a href="call.php"><button class="button">ติดต่อ</button></a>
        <a href="login.php" style="/* เปลี่ยนเป็นอันที่จะพาไปหน้าlogin */"><button class="button">Login</button></a>
      </div>
    </div>
  </header>
  <?php
    $bgImage = 'backgroundwelcome.png';
  ?>

    
  <div class="welcome-container">
    <br>
    <h1 style="text-align: center;">Welcome<br><br>To<br><br>H I W K A O<br></h1>
    <img src="<?php echo $bgImage; ?>" alt="Welcome background" class="welcome-bg">
  </div>    
  <h2 style="text-align: center;">บริการ</h2>
    <form action="sendfixcarpage.php" method="post" style="display: flex; justify-content: center;">
        <button type="submit" style="background-image: url('picture/Fixbutton.png'); background-position: center; background-size: contain; width: 100px; height: 100px; border: none; outline: none;">
        </button>
    </form>
    <p style="text-align: center;">แจ้งซ่อมรถ</p><br><br>

    <p style="text-align: center;">HiwKao</p><br>
    <p style="text-align: center;">สนับสนุนทุกการเดินทาง : บริการซ่อมรถที่มีประสิทธิภาพและสะดวกสบาย</p><br><br><br>

</body>
</html>