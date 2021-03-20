<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	function tinhDiemTB($hk1, $hk2){
		return ($hk1 + ($hk2 * 2))/3;
	}
	$xethocluc;
	$xetketqua;
	$diemTB;
	if (isset($_POST["hk1"]) && isset($_POST["hk2"]))
	{
		$hk1 = $_POST["hk1"]; 
		$hk2 = $_POST["hk2"];
		$diemTB = tinhDiemTB($hk1, $hk2);
		if ($diemTB >= 5){
			$xetketqua = "Được lên lớp";
			if ($diemTB >= 8)
				$xethocluc = "Giỏi";
			else if ($diemTB > 6.5)
				$xethocluc = "Khá";
			else if ($diemTB >= 5)
				$xethocluc = "Trung bình";
		}
		else{
			$xetketqua = "Ở lại lớp";
			$xethocluc = "Yếu";
		}
	}

?>
<form id="form1" name="form1" method="post" action="TinhDiemTB.php">
    <table >
        <tr>
            <td colspan="2" style="text-align:center">KiỂM TRA KẾT QUẢ HỌC TẬP</td>
        </tr>
        <tr>
            <td>Điểm HK I: </td>
            <td><input type="number" name= "hk1" id= "hk1" value="<?php if (!empty($_POST)) echo $_POST['hk1']?>" required="Vui lòng nhập số"></td>
        </tr>
        <tr>
            <td>Điểm HK II: </td>
            <td><input type="text" name= "hk2" id= "hk2" value="<?php if (!empty($_POST)) echo $_POST['hk2']?>" required="Vui lòng nhập số"></td>
        </tr>
        <tr>
            <td>Điểm Trung Bình: </td>
            <td><input type="text" name= "diemtb" id= "diemtb" value="<?php if (!empty($_POST)) echo $diemTB?>" readonly="true"></td>
        </tr>
		 <tr>
            <td>Kết Quả: </td>
            <td><input type="text" name= "ketqua" id= "ketqua" value="<?php if (!empty($_POST)) echo $xetketqua?>" readonly="true"></td>
        </tr>
		 <tr>
            <td>Xếp Loại Học Lực: </td>
            <td><input type="text" name= "xeploai" id= "xeploai" value="<?php if (!empty($_POST)) echo $xethocluc?>" readonly="true"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><button type="submit">Xem Kết Quả</button></td>
        </tr>
    </table>
</form>

</body>
</html>
