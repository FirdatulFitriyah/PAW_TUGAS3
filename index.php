<?php

include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM tbl_020 ORDER BY id_mahasiswa DESC");
?>
 
<html>
<head>    
    <title>Halaman Depan</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
 
<body style="background-color: 	LightSteelBlue;">
<h1>TABEL DATA MAHASISWA</h1>
<a href="add.php">Tambahkan Data</a><br/><br/>
 
    <table width='80%' border=15>
 
    <tr style="background-color: grey;">
        <th>Nim</th> <th>Nama</th> <th>Email</th> <th>Prodi</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['email']."</td>";  
        echo "<td>".$user_data['prodi']."</td>";   
        echo "<td><a href='edit.php?id_mahasiswa=$user_data[id_mahasiswa]'>Edit</a> | <a href='delete.php?id_mahasiswa=$user_data[id_mahasiswa]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>