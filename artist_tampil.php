<?php

 require_once "app/artist.php";

 $kat = new artist();
 $rows = $kat->tampil();

 ?>
  <h2>DATA ARTIST</h2>
 	<table>
    <form method="post">
 		<tr>
 			<th>ID</th>
 			<th>NAMA</th>
      <th>OPSI</th>
 		</tr>

 		<?php foreach ($rows as $row) { $id = $row['artist_id']; ?>

 			<tr>
        <td><?php echo $row['artist_id']; ?></td>
 				<td><?php echo $row['artist_name']; ?></td>
        <td>
          <input class="edit" type="submit" name="edit<?php echo $id ?>" value="EDIT">
				<?php
						if (isset($_POST['edit'.$id])) {
								header("Location: index.php?halaman=artist_edit.php&id=$id");
							}

				 ?>
				<input class="edit" type="submit" value="HAPUS" name="thapus<?php echo $id ?>">
				<?php
				if (isset($_POST['thapus'.$id]))
				{
          $kat = new artist();
          $kat->hapus($id);
				}
				?>
      </td>
 			</tr>

 		<?php } ?>
 	</table>
  <input class="tambah" type="submit" name="tam" value="TAMBAH">
  <?php
    if (isset($_POST['tam'])) {
        header("Location: index.php?halaman=artist_input.php");
      }
  ?>
</form>
