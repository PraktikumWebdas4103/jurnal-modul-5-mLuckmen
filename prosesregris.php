<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'jurnal5';

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if (!$conn) {
		die("Gagal terhubung dengan database : ").mysqli_connect_error();
	}

	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];

		$nimErr = $namaErr = $emailErr = "";

		if (empty($nim)) {
			$nimErr = "NIM tidak boleh kosong";
		}elseif (strlen($nim) != 10) {
			$nimErr = "NIM harus berjumlah 10 karakter";
		}elseif (!is_numeric($nim)) {
			$nimErr = "NIM harus menggunakan angka";
		}

		if (empty($nama)) {
			$namaErr = "Nama tidak boleh kosong";
		}elseif (strlen($nama) > 25) {
			$namaErr = "Nama tidak boleh lebih dari 25 karakter";
		}

		if (empty($email)) {
			$emailErr = "Email tidak boleh kosong";
		}elseif (filter_var(FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Format email tidak sesuai";
		}

		if (empty($nimErr AND $namaErr AND $emailErr)) {
			$sql = "INSERT INTO registrasi (NIM, nama, email) VALUES ('$nim', '$nama', '$email')";
			$query = mysqli_query($conn, $sql);
		}

		header('Location: regristrasi.php');
	}
?>