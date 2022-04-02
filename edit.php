<?php

include_once("koneksi.php");
 
if(isset($_POST['update']))
{    
    $id_mahasiswa = $_POST['id_mahasiswa'];
    
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $prodi=$_POST['prodi'];
        
    $result = mysqli_query($mysqli, "UPDATE tbl_020 SET nim='$nim', nama='$nama',email='$email',prodi='$prodi' WHERE id_mahasiswa=$id_mahasiswa");
    
    header("Location: index.php");
}
?>
<?php

$id_mahasiswa = $_GET['id_mahasiswa'];
 
$result = mysqli_query($mysqli, "SELECT * FROM tbl_020 WHERE id_mahasiswa=$id_mahasiswa");
 
while($user_data = mysqli_fetch_array($result))
{
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $email = $user_data['email'];
    $prodi = $user_data['prodi'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
 
<body style="background-color: 	DarkGray;">
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table width="20%" border="6" >
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim" value=<?php echo $nim;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Prodi</td>
                <td><input type="text" name="prodi" value=<?php echo $prodi;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_mahasiswa" value=<?php echo $_GET['id_mahasiswa'];?>></td>
                <td><input type="submit" name="update" value="Edit" style="background-color: LightBlue;"></td>
            </tr>
        </table>
    </form>
    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>