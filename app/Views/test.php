<?php
$connection = mysqli_connect("localhost","admin-kodein","kodein","db_kodein");
if(!$connection){
	echo "database mati. Tidak dapat terhubung!";
}else{
	echo "berhasil terhubung!";
}

?>