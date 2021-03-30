<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	class HaiSo{
		private $number1;
		private $number2;
		private $kq;
		private $result;
		
		function getResult(){
			return $this->result;
		}
		function init($number1, $number2){
			$this->number1 = $number1;
			$this->number2 = $number2;
		}
		function Cong(){
			return $this->result = $this->number1 + $this->number2;
		}
		function Tru(){
			return $this->result =  $this->number1 - $this->number2;	
		}
		function Nhan(){
			return $this->result =  $this->number1 * $this->number2;
		}
		function Chia(){
			return $this->result = $this->number1 / $this->number2;
		}
	}
	$haiso = new HaiSo();
	$result;
	ini_set('display_errors', 0);
	$pheptinh = $_POST['pheptinh'];
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$haiso->init($number1, $number2);
	
	if ($number2 == 0 && $pheptinh == "/")
		$result = "Không thể chia cho '0'";
	else {
		if ($pheptinh == "+")
			$haiso->Cong();
		else if ($pheptinh == "-")
			$haiso->Tru();
		else if ($pheptinh == "*")
			$haiso->Nhan();
		else if ($pheptinh == "/")
			$haiso->Chia();
		$result = $number1 . ' '. $pheptinh. ' '. $number2 . ' = ' .$haiso->getResult();
	}
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
	<style>
		table, th, td {
	  border: 1px solid black;
	}
	</style>
</head>


<body>
<form action="PhepTinh.php" id="form1" name="form1" method="post">
	<table> .
		<tr> 
			<td colspan="2" style="text-align:center"><strong>PHÉP TÍNH</strong></td>
		</tr>
		<tr>
			<td style="text-align:right">Số thứ nhất: </td>
			<td> <input type="text" name ="number1" value="<?php if (isset($_POST["number1"]))echo $number1 ?>"/></td>
		</tr>
		<tr>
			<td style="text-align:right">Số thứ hai: </td>
			<td> <input type="text" name ="number2" value="<?php if (isset($_POST["number2"]))echo $number2 ?>"/></td>
		</tr>
		<tr>
			<td colspan="2"> <input type="checkbox" name = "pheptinh"value="+" <?php if($_POST['pheptinh'] == "+") echo "checked='checked'"; ?>/>Cộng
			<input type="checkbox" name = "pheptinh"value="-" <?php if($_POST['pheptinh'] == "-") echo "checked='checked'"; ?>/>Trừ
			<input type="checkbox" name = "pheptinh"value="*" <?php if($_POST['pheptinh'] == "*") echo "checked='checked'"; ?>/>Nhân
			<input type="checkbox" name = "pheptinh"value="/" <?php if($_POST['pheptinh'] == "/") echo "checked='checked'"; ?>/>Chia
			<button type="submit">Tính</button></td>
		</tr>	
		<tr>
			<td colspan="2" style="text-align:center"><strong>KẾT QUẢ SAU KHI TÍNH</strong></td>
		</tr>
			<tr>
			<td colspan="2" >
			<input style="text-align:center; border:none; width:260px" type="text" value="<?php if (isset($_POST["number1"]) && isset($_POST["number2"]))echo $result ?>" /></td>
		</tr>
	</table>
</form>
</body>
</html>
