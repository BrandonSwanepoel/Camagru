<?PHP
function email_verif($email, $user, $key) 
{
	$email_body = "
	<p>Hi ".$user.",</p>
	<p>Thanks for Registering for a Camagru Account</p>
	<p>Please Open this link to verify your email address -
	<a href='http://localhost/Camagru/users/email_verified.php?ver_key=".$key."'>Register Account</a><br />
	Best Regards,<br />Camagru</p>
	";
		$to = $email;
		$subject = "Email Verification";
		$headers = "From: Camagru@gmail.com\r\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
		mail($to,$subject,$email_body,$headers);
}
?>