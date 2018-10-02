<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body style="font-family: mimich">
	<center>
	<form action="prosesregris.php" method="POST">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"                                  required=""></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="@gmail.com" required=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send" style="color: black; width: 100px;height: 40px;border-radius: 10px"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$email=$_POST['email'];

		$error=array();
		if(strlen($_POST['nim']) <= 10){
			$error['nim']=="Harus 10";
		} if(strlen($_POST['nama']) <= 25){
			$error['nama']=="Harus 25";
		} if(empty($email)){
			$error['email']=="Email harus diisi";
		}
	}
?>

	