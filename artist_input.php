<?php
require_once "app/artist.php";

$kat = new artist();

if (isset($_POST['tsimpan'])) {
	$kat = new artist();
	$kat->input();

}

?>
<h2>INPUT DATA ARTIST</h2>
	<table>
		<form action="" method="POST">
		<tr>
			<th>NAMA</th>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>	
			<th></th>
			<td><input class="tambah" type="submit" name="tsimpan" value="TAMBAH"></td>
		</tr>
	</table>
</form>
