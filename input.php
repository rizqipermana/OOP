<?php
error_reporting(0);
include "Database.php";
include "Mahasiswa.php";

$Database=new Database();
$Database->konekMysql();

if($_POST['simpan']=="Simpan"){
$Mahasiswa=new Mahasiswa();
$Mahasiswa->setNim($_POST['nim']);
$Mahasiswa->setNama($_POST['nama']);
$Mahasiswa->setJurusan($_POST['jurusan']);
$Mahasiswa->save();

echo " data berhasil Disimpan";
}


?>

<form action="" method="POST">
<pre>
Form Mahasiswa<br>
Nim 	:<input type="text" name="nim"><br>
Nama 	:<input type="text" name="nama"><br>
jurusan :<input type="text" name="jurusan"><br>
<input type="submit" name="simpan" Value="Simpan">
</pre>
</form>
