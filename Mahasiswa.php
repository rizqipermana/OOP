
<?php
class Mahasiswa{
	private $nim;
	private $nama;
	private $jurusan;


	public function tampil(){
		$query=mysql_query("SELECT * from mahasiswa");
		While($rows=mysql_fetch_object($query))
		$data[]=$rows;
		return $data;
	}

	public function save(){
		$nim     =$this->getNim();
		$nama    =$this->getNama();
		$jurusan =$this->getJurusan();

		$query=mysql_query("INSERT into mahasiswa (nim,nama,jurusan) values ('$nim','$nama','$jurusan')");
	}



	public function setNim($nim){
		$this->nim=$nim;
	}

	public function setNama($nama){
		$this->nama=$nama;

	}

	public function setJurusan($jurusan){
		$this->jurusan=$jurusan;

	}

	public function getNim(){
		return $this->nim;
	}

	public function getNama(){
		return $this->nama;
	}

	public function getJurusan(){
		return $this->jurusan;
	}
}




?>