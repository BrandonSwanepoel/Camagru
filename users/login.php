<!DOCTYPE html>
<?php
include("../config/dbcon.php");
session_start();
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Camagru - Login</title>
    <link rel="stylesheet" type="text/css" href="../index.css">
</head>
<body style="background: url(../background/bg.png)">
<header style="margin-bottom:10em;width: 100%; height: 15%; background-color:black;z-index:999;"><h1><a href="../index.php">Camagru</a><h1>
         <div><a style="float:right;"href="register.php">Register</a></div>
     </header>
    <section>
            <div class="reg">
                    <form action="login.php" method="post">
                        <h2 class="text">Username</h2>
                        <div class="form-group">
                            <input size="25" type="text" name="username" class="form-control"/>
                        </div>
                        <h2 class="text">Password</h2>
                        <div class="form-group">
                            
                            <input type="password" name="password" class="form-control"/>
                        </div>
                        <div class="form-group">
                           <input type="submit" name="login" id="log_but" value="Login"/>
                        </div>
                        <div class="form-group">
                        <a href="forgot_pass.php" style="background: transparent; color:#009f8b; border-color: #009f8b; font-size:17px; margin-top: 1%;">Forgot Password?</a>
                        </div>
                    </form>
                    <?php
					if (isset($_POST['login'])) {
                        include("../functions/log_func.php");
                        log_in();
                        
					}
				    ?>
                </div>
            </div>
    </section>
 <footer></footer>
</body>
</html>
