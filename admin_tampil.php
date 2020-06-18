<?php

 require_once "app/admin.php";

 $admin = new admin();
 $rows = $admin->tampil();

 ?>

<h2>DATA ADMIN</h2>
 	<table>
    <form method="post">
 		<tr>
 			<th>ID</th>
 			<th>NAMA</th>
      <th>ALAMAT</th>
      <th>EMAIL</th>
      <th>HP</th>
      <th>USERNAME</th>
      <th>OPSI</th>
 		</tr>

 		<?php foreach ($rows as $row) { $id = $row['id_admin']; ?>

 			<tr>
        <td><?php echo $row['id_admin']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['hp']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td>
          <input class="edit" type="submit" name="edit<?php echo $id ?>" value="EDIT">
				<?php
						if (isset($_POST['edit'.$id])) {
								header("Location: index.php?name=<?php echo $user;?>&halaman=admin_edit.php&id=$id");
							}

				 ?>
				<input class="edit" type="submit" value="HAPUS" name="thapus<?php echo $id ?>">
				<?php
				if (isset($_POST['thapus'.$id]))
				{
          $admin = new admin();
          $admin->hapus($id);
				}
				?>
      </td>
 			</tr>

 		<?php } ?>
 	</table>
  <input class="tambah" type="submit" name="tam" value="TAMBAH">
  <?php
    if (isset($_POST['tam'])) {
        header("Location: index.php?halaman=admin_input.php");
      }
  ?>
</form>
