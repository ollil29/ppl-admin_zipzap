<?php

include_once('config.php');

if(isset($_POST["simpan"])){
 $id = $_GET["nama_lengkap"];
 $nim = $_POST["username"];
 $nama = $_POST["password"];
 $nim = $_POST["email"];
 $nama = $_POST["jenis_kelamin"];
 $query = "UPDATE user SET nama_lengkap='$nama_lengkap', username='$username', password='$password', email='$email', jenis_kelamin='$jenis_kelamin, WHERE id='$id'";
 mysqli_query($koneksi, $query);
 header('location:index.php');
}

?>