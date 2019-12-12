<?php

include_once('config.php');
$id = $_GET['email'];
$query = "DELETE email FROM user WHERE email='$id'";
mysqli_query($koneksi, $query);
header('location:users.php');

?>