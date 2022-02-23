<?php
require "db.php";
if(isset($_GET["id_akun"])){
    $id = $_GET["id_akun"];
    $query = $con->query("delete from akun where id_akun='$id'");
    if($query){
        echo "<script>alert('Berhasil')</script>";
        echo "<script>window.location.href='dashboard.php'</script>";
    }else{
        echo "<script>alert('Gagal')</script>";
    }
}