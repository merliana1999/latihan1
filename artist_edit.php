<?php

 require_once "app/artist.php";
 $id = $_GET['id'];
 $kat = new artist();
 $row = $kat->edit($id);
 if (isset($_POST['tsimpan'])){
   $kat = new artist();
   $kat->simpan($id);
 }
 if (isset($_POST['thapus']))
 {
   $kat = new artist();
   $kat->hapus($id);
 }

 ?>
<h2>EDIT DATA ARTIST</h2>
<form action="" method ="POST">
	<table>
		<tr>
			<th>NAMA</th>
			<td><input type="text" name="nama" value="<?php echo $row['artist_name']; ?>"></td>
		</tr>
		<tr>
			<th></th>
			<td><input class="ubah" type="submit" name="tsimpan" value="UBAH"><input class="ubah" type="submit" name="thapus" value="HAPUS"></td>

		</tr>
	</table>
