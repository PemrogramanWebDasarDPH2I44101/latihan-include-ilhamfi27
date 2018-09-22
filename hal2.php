<?php
include 'header.php';
session_start();
$nama = $_SESSION['name']; 
$akses = $_SESSION ['level'];
if ($akses=='admin') {
	echo "halaman boleh diakses, hai $nama";
}else{
	header('location: hal1.php');
}
?>
<br>
<a href="logout.php">Logout</a>
<br>
<?php include 'footer.php'; ?>