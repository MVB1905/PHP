<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
$t = time();
setcookie("democookie", $t);
session_start();
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']))
{
	$_SESSION["name"] = $_POST['name'];
	$_SESSION["email"] = $_POST['email'];
	$_SESSION["username"] = $_POST['username'];
	$_SESSION["password"] = $_POST['password'];
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
 if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']))
 {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 } 
?>
	<div style="width:auto; height:auto">
	<form action="Flogin.php" method="POST">
		<table>
			<tr>
				<td colspan="2" align="center"><strong>LOGIN</strong></td>
			</tr>
			<tr>
				<td> Name: </td>
				<td> <input name ="name"type="text" required= ""/>
			</tr>
			<tr>
				<td> Email: </td>
				<td> <input name ="email"type="text" required= ""/>
			</tr>
			<tr>
				<td> Username: </td>
				<td> <input name ="username"type="text" required= ""/>
			</tr>
			<tr>
				<td> Password: </td>
				<td> <input name ="password"type="password" required= ""/>
			</tr>
			<tr>
				<td colspan="2" align="center"><button type="submit"> Login </button></td>
			</tr>
		</table>
	</form>
	</div>
	<div style="height:auto; width:auto; text-align:center;">
		<?php if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']))
				{
					echo "Xin chào ". $name;
					echo "<br>Email ". $email;
					echo "<br>Tên đăng nhập ". $username;
					echo "<br>Mật khẩu ". $password;
					echo '<br><a href="Fmain.php" class="button" title="">Click here!</a></div>';

				}
		 ?>
	</div>
</body>
</html>
