<form action="" method="POST">
	Komentar : <input type="text" name="komentar">
	<input type="submit" name="submit" value="submit">
	<?php if (isset($err)) {
		echo $err;
	} ?>
</form>

<?php
	if (isset($_POST['submit'])) {
		$komentar = $_POST['komentar'];
		$err ="";

		$jmlKata = str_word_count($komentar);
		if ($jmlKata < 5) {
			$err = "ERROR";
		}

	}
?>
