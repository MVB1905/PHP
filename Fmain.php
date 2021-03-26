<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<style>
		.images{
			background-Image: url(sqv1times.png);
			height: 500px;
			width:auto;
		}
	</style>
	
</head>

<body class= "body">
	<div class="main">
		<table>
			<thead>
				<tr>
					<td class="2"><strong>Thông tin cá nhân Lấy Từ Session</strong></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo "Your Name:". $_SESSION['name']; ?></td>
				</tr>
				<tr>
					<td><?php echo "Your Email: ". $_SESSION['email']; ?></td>
				</tr>
				<tr>
					<td><?php echo "Your Username: ". $_SESSION['username']; ?></td>
				</tr>
				<tr>
					<td><?php echo "Your Password: ". $_SESSION['password']; ?></td>
				</tr>
			</tbody>
		</table>
		<hr />
		<?php 
			if(isset($_COOKIE['democookie'])) {
				echo "<br>Giá trị cookie lấy được ".$_COOKIE["democookie"];
			}
			else
				echo "<br>Không lấy được cookie";
		?>
		<a href="Flogin.php"> Back </a>
		<hr />
	</div>
	<div class="images">
	</div>
</body>
</html>
