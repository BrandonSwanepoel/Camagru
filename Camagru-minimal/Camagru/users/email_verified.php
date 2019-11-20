<!DOCTYPE html>
<?php
include("../config/dbcon.php");
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Camagru - Verified</title>
    <link rel="stylesheet" type="text/css" href="../index.css">
</head>
<body style="background: url(../background/bg.png)">
    <header style="margin-bottom:10em;width: 100%; height: 15%; background-color:black;z-index:999;"><h1><a href="../index.php">Camagru</a><h1>
    <ul style="list-style-type:none; margin: 0; display: inline; padding: 0;">
    <li style="display: inline; float: left;"><a href="login.php" style="margin-left:20px;">Login</a><li>
    </ul>
     </header>
    <section>
            <div class="reg">
            <?PHP
            include '../functions/verified_func.php';
            verify();
            ?>
                </div>
            </div>
    </section>
 <footer></footer>
</body>
</html>
