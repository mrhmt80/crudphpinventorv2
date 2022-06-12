<?php
include "koneksi.php";

$nim=$_POST['nim'];

$cek_kode=mysqli_query($koneksi,"select * from tabel_mhs where nim='$nim'");

$cek=mysqli_num_rows($cek_kode);

if($cek>0){
	
	$input=mysqli_query($koneksi,"DELETE from tabel_mhs WHERE nim='$nim' ");

	echo "data berhasil dihapus !";


} else {

		echo "data tidak ada";
}



?>