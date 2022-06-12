<?php
include "koneksi.php";

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$semester=$_POST['semester'];
$alamat=$_POST['alamat'];

$cek_kode=mysqli_connect($koneksi,"select * from tabel_mhs nim='$nim'");

$cek=mysqli_num_rows($cek_kode);

if($cek>0){
	echo "Data Sudah Dalam Database Mohon Gunakan NIM Lain";
} else {
	$input=mysqli_query($koneksi,"insert into tabel_mhs(nim,nama,semester,alamat) values ('$nim','$nama','$semester','$alamat')");

	if($input){
		echo "data berhasil diinput !";
	}
}



?>