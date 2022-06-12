<?php 

include "koneksi.php";

$data=mysqli_query($koneksi,"select * from tabel_mhs");

while($result=mysqli_fetch_array($data)) {
	echo $result["nim"];
	echo" ";
	echo $result["nama"];
	echo" ";
	echo $result["semester"];
	echo"||";
}

?>