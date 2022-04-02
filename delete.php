<?php

include_once("koneksi.php");
 
$id_mahasiswa = $_GET['id_mahasiswa'];
 
$result = mysqli_query($mysqli, "DELETE FROM tbl_020 WHERE id_mahasiswa=$id_mahasiswa");
 
header("Location:index.php");
?>