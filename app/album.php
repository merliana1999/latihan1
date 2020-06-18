<?php
class album {
	private $db;
	public function __construct()
	{
		try {
				$this->db =
				new PDO("mysql:host=localhost;dbname=db_utsmusik", "root", "");
			} catch (PDOException $e) {
				die ("Error " . $e->getMessage());
			}
		}
		public function tampil()
		{
			$sql = "SELECT * FROM tb_album";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			$data = [];
			while ($rows = $stmt->fetch()) {
				$data[] = $rows;
			}
			return $data;
		}
		public function cat()
		{
			$sql = "SELECT * FROM tb_album";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			$data = [];
			while ($rows = $stmt->fetch()) {
				$data[] = $rows;
			}
			return $data;
		}
		public function edit($id)
		{
			$sql = "SELECT * FROM tb_album WHERE album_id = :id  ";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
		}
		public function simpan($id)
		{
			$sql2 = "UPDATE tb_album SET artist_id = :artist_id, album_name = :album_name WHERE album_id = :id";
			$stmt2 = $this->db->prepare($sql2);
			$stmt2 -> bindParam(":artist_id", $_POST['artist_id']);
			$stmt2 -> bindParam(":album_namename", $_POST['album_name']);
			$stmt2 -> bindParam(":id", $id);
			$stmt2 -> execute();
			header("Location: index.php?halaman=album_tampil.php");
		}
		public function hapus($id)
		{
			$sql3 = "DELETE FROM tb_album WHERE album_id = :id";
			$stmt3 = $this->db->prepare($sql3);
			$stmt3-> bindParam("id",$id);
			$stmt3-> execute();
			header("Location: index.php?halaman=album_tampil.php");
		}
		public function kode()
		{
			$sql4 = "SELECT * from tb_album where album_kode in (select max(album_kode) from tb_album)";
			$stmt4 = $this->db->prepare($sql4);
			$stmt4->execute();
			$result = $stmt4->fetch();
			$kod = $result['album_kode'];
			if ($kod<10 and $kod > 0 ) {
				$kod1 = substr($kod,-1);
				$kod2 = $kod1+1;
				$kode = "A0".$kod2;
			} else if ($kod > 10)
			{
				$kod1 = substr($kod,-2);
				$kod2 = $kod1+1;
				$kode = "A".$kod2;
			} else {
				$kode = "A001";
			}
			return $kode;
		}
		public function input(){
			$sql5 = "INSERT INTO tb_album VALUES (NULL, :artist_id, :album_name)";
			$stmt5 = $this->db->prepare($sql5);
			$stmt5->bindParam(":artist_id", $_POST['artist_id']);
			$stmt5->bindParam(":album_name", $_POST['album_name']);
			$stmt5->execute();
			header("Location: index.php?halaman=album_tampil.php");
		}
	}
