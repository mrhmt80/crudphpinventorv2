<?php
include "koneksi.php";

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$semester=$_POST['semester'];
$alamat=$_POST['alamat'];

$cek_kode=mysqli_query($koneksi,"select * from tabel_mhs where nim='$nim'");

$cek=mysqli_num_rows($cek_kode);

if($cek>0){
	
	$input=mysqli_query($koneksi,"UPDATE tabel_mhs SET nama='$nama',alamat='$alamat' WHERE nim='$nim' ");

	echo "data berhasil diubah !";


} else {

		echo "data tidak ada";
}



?>