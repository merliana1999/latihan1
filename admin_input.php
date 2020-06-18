<?php
require_once "app/admin.php";

$admin = new admin();

if (isset($_POST['tsimpan'])) {
	$admin = new admin();
	$admin->input();

}

?>
<h2>INPUT DATA ADMIN</h2>
	<table>
		<form action="" method="POST">
		<tr>
			<th>NAMA</th>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<th>ALAMAT</th>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<th>EMAIL</th>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<th>HP</th>
			<td><input type="text" name="hp"></td>
		</tr>
		<tr>
			<th>USERNAME</th>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<th>PASSWORD</th>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>	
			<th></th>
			<td><input class="tambah" type="submit" name="tsimpan" value="TAMBAH"></td>
		</tr>
	</table>
</form>
