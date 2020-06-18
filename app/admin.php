<?php
class admin {
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
			$sql = "SELECT * FROM tb_admin";
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
			$sql = "SELECT * FROM tb_admin";
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
			$sql = "SELECT * FROM tb_admin WHERE id_admin = :id  ";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
		}
		public function simpan($id)
		{
			$sql2 = "UPDATE tb_admin SET nama = :nama, alamat=:alamat, email=:email, hp=:hp, username=:username, password=:password WHERE id_admin = :id";
			$stmt2 = $this->db->prepare($sql2);
			$stmt2 -> bindParam(":nama", $_POST['nama']);
			$stmt2 -> bindParam(":alamat", $_POST['alamat']);
			$stmt2 -> bindParam(":email", $_POST['email']);
			$stmt2 -> bindParam(":hp", $_POST['hp']);
			$stmt2 -> bindParam(":username", $_POST['username']);
			$stmt2 -> bindParam(":password", $_POST['password']);
			$stmt2 -> bindParam(":id", $id);
			$stmt2 -> execute();
			header("Location: index.php?halaman=admin_tampil.php");
		}
		public function hapus($id)
		{
			$sql3 = "DELETE FROM tb_admin WHERE id_admin = :id";
			$stmt3 = $this->db->prepare($sql3);
			$stmt3-> bindParam("id",$id);
			$stmt3-> execute();
			header("Location: index.php?halaman=admin_tampil.php");
		}
		
		public function input(){
			$sql5 = "INSERT INTO tb_admin VALUES (NULL, :nama, :alamat, :email, :hp, :username, :password)";
			$stmt5 = $this->db->prepare($sql5);
			$stmt5->bindParam(":nama", $_POST['nama']);
			$stmt5 -> bindParam(":alamat", $_POST['alamat']);
			$stmt5 -> bindParam(":email", $_POST['email']);
			$stmt5 -> bindParam(":hp", $_POST['hp']);
			$stmt5 -> bindParam(":username", $_POST['username']);
			$stmt5 -> bindParam(":password", $_POST['password']);
			$stmt5->execute();
			header("Location: index.php?halaman=admin_tampil.php");
		}
		public function login($un,$pass)
		{
			$slog = "SELECT * FROM tb_admin WHERE username = :uname AND password = :upass";
			$log = $this->db->prepare($slog);
			$log->bindParam(":uname", $un);
			$log->bindParam(":upass", $pass);
			$log->execute();
			$login = $log->fetch();
			if($log->rowCount() > 0){
					session_start();
					$_SESSION["nama"] = $login['nama'];
					header("location:index.php");
					exit;
			}
	}
}
