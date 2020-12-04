<!DOCTYPE html>
<?php
include 'Access-Control-Allow-Origin = *';
include("config/dbcon.php");
include "../functions/upload_photo.php";
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Camagru - User Account</title>
    <link rel="stylesheet" type="text/css" href="../index.css" crossorgin="anonymous">
</head>
<body style="background: url(../background/bg.png)">
     <header style="margin-bottom:10em;width: 100%; height: 15%;background-color:black;z-index:999;"><h1><a href="../index.php">Camagru</a><h1>
         <!-- <div><a style="float:right;"href="users/register.php">Register</a></div> -->
		 <ul style="list-style-type:none; margin: 0; display: inline; padding: 0;">
		 <li style="display: inline; float: left; padding-right: 20px;"><a href="gallery.php" style="margin-left:20px;">Gallery</a></li>
         <li style="display: inline; float: left;"><a href="user_account.php" style="margin-left:20px;">Profile</a></li>
         <li style="display: inline; float: left;"><a href='../index.php?session_status=logout' style="margin-left:20px;">Log Out</a></li>
         </ul>
     </header>
    <section>
        <div style="text-align: center;">
            <h1 style="color:#009f8b; font-size:40px;">Upload Image</h1>
        </div>
        <div class="reg">
        <section class="section" style="margin-top:0%;margin-bottom:0px">
	<!-- webcam and image upload tile -->
		<div class="tile is-ancestor" style="background:transparent;">
			<div class="tile" style="background:transparent;">
				<div class="tile is-parent" style="background:transparent;">
					<article class="tile is-child box" style="background:transparent;">
						<p class="title">Take a picture</p>
							<video Control crossorgin="anonymous" autoplay id='vid' width='720' height='480' style=''></video>
							<br/>
							<div >
								<br />
								<button style="background: white; color:#009f8b; border-color: #009f8b; font-size:22px; border-radius:0px;" id="shoot" >Take Picture</button>
							</div>
							<br />
							<canvas id='uploadCanvas' width='720' height='480' style=""></canvas>
						<form action="" method="POST" enctype=multipart/form-data>
							<input name="taken" id="taken" type="hidden" value="upload_photo.php">

							<div class="box" style="background:grey;">
								<img src="http://localhost/Camagru/images/frame.png" class="supers" width="100" height="100">
								<img src="http://localhost/Camagru/images/f-sticker.png" crossorgin="anonymous" class="supers" width="100" height="100">
								<img src="http://localhost/Camagru/images/cat-sticker.png" crossorgin="anonymous"class="supers" width="100" height="100">
								<img src="http://localhost/Camagru/images/h-sticker.png" crossorgin="anonymous" class="supers" width="100" height="100">
								<img src="http://localhost/Camagru/images/q-sticker.png" crossorgin="anonymous" class="supers" width="100" height="100">
							</div>
							<div style="padding-top:1%;">
								<button style="background: transparent; color:#009f8b; border-color: #009f8b; font-size:22px; border-radius:0px;" type="submit" name="submit_taken" id="submit_taken">Upload Photo</button>
							</div>
							<br/><br/><p class="title">Or Upload a picture</p>
							<input name="upl_image" id="upl_image" type="file" style="background: transparent; color:#009f8b; border-color: aqua; font-size:17px; margin-top: 1%;">
							<input class="button" name="upload" type="submit" value="Upload Picture" style="background: transparent; color:#009f8b; border-color: aqua; font-size:17px; margin-top: 1%;">
						</form>
					</article>
				</div>
			</div>
		</div>
		<div class="tile">
				<div class="tile is-parent">
					<article class="tile is-child box">
						<p class="title">Images You've Uploaded</p>
						<?php
							include '../functions/uploaded_cam.php'; 
							uploaded_cam($_SESSION['user_id']); 
						?>
					</article>
				</div>
		</div>
	</div>
    </section>
    <script src="../includes/cam.js"></script>
 <footer></footer>
</body>

</html>
<?php

if (isset($_POST['upload'])){
    if (isset($_FILES['upl_image']['name'])){
        include '../functions/upload.php';
        upload_image($_SESSION['user_id']);
    }
}
?>
