<!DOCTYPE html>
<?php
include("../config/dbcon.php");
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Camagru - Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="../index.css">
</head>
<body style="background: url(../background/bg.png)">
     <header style="margin-bottom:10em;width: 100%; height: 15%; background-color:black;z-index:999;"><h1><a href="../index.php">Camagru</a><h1>
     </header>
    <section>
            <div class="reg">
                    
                    <form name="forgot_pass" action="forgot_pass.php" method="post" enctype="multipart/form-data">
                        <h2 class="text">Email</h2>
                        <div class="form-group">
                            <input size="25" type="text" name="email" class="form-control"/>
                        </div>
                        <div class="form-pass">
                            <br/>
                           <input type="submit" name="forgot_pass" style="background: transparent; color:#009f8b; border-color: #009f8b; font-size:17px; margin-top: 1%;" value="Forgot Password"/>
                        </div>
                        <div class="form-group">
                            <a href="login.php" style="background: transparent; color:#009f8b; border-color: #009f8b; font-size:17px; margin-top: 1%;">Login</a>
                        </div>
                    </form>
                    <?php
                        if (isset($_POST['forgot_pass'])) {
                        include '../functions/forgot_pass_func.php';
                        forgot_pass();
                        echo '<script>window.location.href="pass_verifcation.php";</script>';
                     }
                    ?>
                </div>
            </div>
    </section>
 <footer></footer>
</body>
</html>