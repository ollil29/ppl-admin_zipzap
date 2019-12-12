<?php
include_once('config.php');
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html>
<head>
 <title>Edit Data</title>
</head>
<body>
 <h1>Edit Data Pelanggan</h1>
 <br>
 <?php 
  $sql2 = "SELECT * FROM user WHERE id='$id'";
  $query = mysqli_query($koneksi, $sql2);
  $row = mysqli_fetch_array($query);
 ?>
 <form method="post" action='update.php?id=<?php echo $row['email']; ?>'>
  <label>Nama Lengkap</label><br>
  <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>"><br>
  <label>Username</label><br>
  <input type="text" name="username" value="<?php echo $row['username']; ?>"><br>
  <br>
  <input type="submit" name="simpan" value="Perbaharui">
 </form>
</body>
</html>