<?php
	session_start();
	include('prosesregris.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<form action="" method="POST">
		NIM : <input type="text" name="nim"><br>
		<?php if (isset($nimErr)) {
			echo $namaErr;
		} ?>
		Nama : <input type="text" name="nama"><br>
		<?php if (isset($namaErr)) {
			echo $namaErr;
		} ?>
		Email : <input type="text" name="email"><br>
		<?php if (isset($emailErr)) {
			echo $emailErr;
		} ?>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>