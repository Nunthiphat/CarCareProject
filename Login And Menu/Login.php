<?php include('topheader.php'); ?>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login1.css">
</head>
<body>
    <form action="Loginaction.php" method="POST" >

        <div class="box-main">
            <h1>LOGIN</h1>
            <div class = "box-input" >
                
            <?php  if(isset($_SESSION['error'])){ ?>
                <div class="alert alert-danger" role="alert" >
                    <?php 
                    echo $_SESSION['error']; 
                    unset ($_SESSION['error']); 
                    ?>
                </div>
            <?php } ?>

                <label for="Email">Email Address</label>
                <input type="text" name="Email" class="box-insert" placeholder="Email...." >

                <label for="Password">Password</label>
                <input type="password" name="Password" class="box-insert" placeholder="Password...." >

                <button class="submit" id="Login">Login</button>

            </div>
        </div>

    </form>
</body>
</html>