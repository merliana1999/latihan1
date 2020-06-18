<?php
require_once "app/album.php";
require_once "app/artist.php";

$album = new album();
$artist = new artist();
$dat1 = $artist->tampil();

if (isset($_POST['tsimpan'])) {
	$album = new album();
	$album->input();
}

?>
<h2>INPUT DATA ALBUM</h2>
	<table>
		<form action="" method="POST">
		<tr>
			<th>ID ARTIST</th>
			<td>
				<select name="artist_id">
					<?php foreach ($dat1 as $row ) { ?>
					<option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>NAMA ALBUM</th>
			<td><input type="text" name="album_name"></td>
		</tr>
		<tr>
			<th></th>
			<td><input class="tambah" type="submit" name="tsimpan" value="TAMBAH"></td>
		</tr>
	</table>
</form>
