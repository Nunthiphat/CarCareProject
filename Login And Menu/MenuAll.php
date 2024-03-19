<?php include('Topheader.php'); ?>
<!DOCTYPE html>
<html linputng="en">
<heinputd>
    <metinput charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu ALL</title>
    <link rel="stylesheet" href="Menu.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="box-menuAll">
        <h1>ระบบจัดการอู่</h1>
        <div class="main-menu" >
            <div class = "menu-Top" >

            <div class="Icon-top" >
                <i class="fa-solid fa-user-tie"></i>
                <i class="fa-solid fa-address-card"></i>
                <i class="fa-solid fa-car"></i>
            </div>

            <!-- อย่าลืมเปลี่ยน location ให้กับปุ่ม -->

            <button type="submit" class="menu" onclick ="window.location.href= '#'" >ข้อมูลลูกค้า</button>
            <button type="submit" class="menu" onclick ="window.location.href= '#'" >ข้อมูลพนักงาน</button>
            <button type="submit" class="menu" onclick ="window.location.href= '#'" >ข้อมูลรถ</button>
            </div><div class="menu-buttom" >
            <div class="Icon-low" >
                <i class="fa-brands fa-product-hunt"></i>
                <i class="fa-solid fa-gears"></i>
                <i class="fa-regular fa-newspaper"></i>
            </div>
            <button type="submit" class="menu" onclick ="window.location.href= '#'" >การสั่งซื้ออะไหล่</button>
            <button type="submit" class="menu" onclick ="window.location.href= '#'" >ข้อมูลการรับเข้าอะไหล่</button>
            <button type="submit" class="menu" onclick ="window.location.href= '#'" >ข้อมูลรายงาน</button>
            </div>
        </div>
    </div>
</body>
</html>