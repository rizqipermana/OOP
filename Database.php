<?php
class Database{

	private $host   ="localhost";
	private $user   ="root";
	private $pass   ="";
	private $dbname ="web3";

	public function konekMysql(){
		mysql_connect($this->host,$this->user,$this->pass) or die ("koneksi gagal");
		mysql_select_db($this->dbname) or die ("Database gak Ketemu");
	}
}




?>