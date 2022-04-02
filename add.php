<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
 
<body style="background-color: 	LightSlateGray;">
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="30%" border="0">
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim" ></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
      		<tr> 
				<td>Prodi</td>
				<td><input type="text" name="prodi"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add" style="background-color: CornflowerBlue;"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
    	$prodi = $_POST['prodi'];
		
		include_once("koneksi.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO tbl_020(nim,nama,email,prodi) VALUES('$nim','$nama','$email','$prodi')");
		
		echo "User added successfully. <a href='index.php'>Lihat Hasil</a>";
	}
	?>
	<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>