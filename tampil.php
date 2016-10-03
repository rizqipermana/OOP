<?php
 include "Database.php";
 include "Mahasiswa.php";

	$Database = new Database();
	$Database->konekMysql();

	$Mahasiswa     = new Mahasiswa();
	$dataMahasiswa =$Mahasiswa->tampil();
?>
<table>
<tr>
<td>Nim</td><td>Nama</td><td>Jurusan</td>
</tr>
<?php
foreach($dataMahasiswa as $value) 
{
?>
<tr>
<td><?php echo $value->nim;?></td>
<td><?php echo $value->nama;?></td>
<td><?php echo $value->jurusan;?></td>
</tr>
<?php
}
?>
</table>
