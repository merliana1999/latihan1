<?php

 require_once "app/album.php";

 $album = new album();
 $rows = $album->tampil();

 ?>
<h2>DATA ALBUM</h2>
 	<table>
    <form method="post">
 		<tr>
 			<th>ID ALBUM</th>
 			<th>ID ARTIST</th>
 			<th>NAMA ALBUM</th>
      <th>OPSI</th>
 		</tr>

 		<?php foreach ($rows as $row) { $id = $row['album_id']; ?>

 			<tr>
 				<td><?php echo $row['album_id']; ?></td>
 				<td><?php echo $row['artist_id']; ?></td>
 				<td><?php echo $row['album_name']; ?></td>
        <td>
          <input class="edit" type="submit" name="edit<?php echo $id ?>" value="EDIT">
				<?php
						if (isset($_POST['edit'.$id])) {
								header("Location: index.php?halaman=album_edit.php&id=$id");
							}

				 ?>
				<input class="edit" type="submit" value="HAPUS" name="thapus<?php echo $id ?>">
				<?php
				if (isset($_POST['thapus'.$id]))
				{
          $album = new album();
          $album->hapus($id);
				}
				?>
      </td>
 			</tr>

 		<?php } ?>
 	</table>
  <input class="tambah" type="submit" name="tam" value="TAMBAH">
  <?php
    if (isset($_POST['tam'])) {
        header("Location: index.php?halaman=album_input.php");
      }
  ?>
</form>
