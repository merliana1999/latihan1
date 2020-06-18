<?php

 require_once "app/admin.php";
 $id = $_GET['id'];
 $admin = new admin();
 $row = $admin->edit($id);
 if (isset($_POST['tsimpan'])){
   $admin = new admin();
   $admin->simpan($id);
 }
 if (isset($_POST['thapus']))
 {
   $admin = new admin();
   $admin->hapus($id);
 }

 ?>
<h2>EDIT DATA ADMIN</h2>
<form action="" method ="POST">
	<table>
		<tr>
			<th>NAMA</th>
			<td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
		</tr>
		<tr>
			<th>ALAMAT</th>
			<td><textarea name="alamat"><?php echo $row['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<th>EMAIL</th>
			<td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
		</tr>
		<tr>
			<th>HP</th>
			<td><input type="text" name="hp" value="<?php echo $row['hp']; ?>"></td>></td>
		</tr>
		<tr>
			<th>USERNAME</th>
			<td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>></td>
		</tr>
		<tr>
			<th>PASSWORD</th>
			<td><input type="password" name="password" value="<?php echo $row['password']; ?>"></td>></td>
		</tr>
		<tr>
			<th></th>
			<td><input class="ubah" type="submit" name="tsimpan" value="UBAH"><input class="ubah" type="submit" name="thapus" value="HAPUS"></td>

		</tr>
	</table>
