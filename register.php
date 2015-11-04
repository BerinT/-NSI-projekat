<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$upass = md5($_POST['pass']);
	
	$sql = "INSERT INTO uposlenici(username,email,password) VALUES('$uname','$email','$upass')";
 
 if ($conn->query($sql) === TRUE)
 {
  ?>
        <script>alert('Successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem za prijavu i registraciju</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Registruj se</button></td>
</tr>
<tr>
<td><a href="index.php">Prijavi se</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>