<?php
class artist {
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
			$sql = "SELECT * FROM tb_artist";
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
			$sql = "SELECT * FROM tb_artist";
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
			$sql = "SELECT * FROM tb_artist WHERE artist_id = :id  ";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
		}
		public function pilihdata(String $d1)
		{
			$sql = "SELECT * FROM tb_artist WHERE artist_id = :id";
			$stmt = $this->db->prepare($sql);
			$stmt -> bindParam(":id", $d1);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
		}
		public function simpan($id)
		{
			$sql2 = "UPDATE tb_artist SET artist_name = :nama WHERE artist_id = :id";
			$stmt2 = $this->db->prepare($sql2);
			$stmt2 -> bindParam(":nama", $_POST['nama']);
			$stmt2 -> bindParam(":id", $id);
			$stmt2 -> execute();
			header("Location: index.php?halaman=artist_tampil.php");
		}
		public function hapus($id)
		{
			$sql3 = "DELETE FROM tb_artist WHERE artist_id = :id";
			$stmt3 = $this->db->prepare($sql3);
			$stmt3-> bindParam("id",$id);
			$stmt3-> execute();
			header("Location: index.php?halaman=artist_tampil.php");
		}
		
		public function input(){
			$sql5 = "INSERT INTO tb_artist VALUES (NULL, :nama)";
			$stmt5 = $this->db->prepare($sql5);
			$stmt5->bindParam(":nama", $_POST['nama']);
			$stmt5->execute();
			header("Location: index.php?halaman=artist_tampil.php");
		}
	}
