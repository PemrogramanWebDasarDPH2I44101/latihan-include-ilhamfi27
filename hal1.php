<?php
session_start();
$_SESSION['pesan'] = null;
if (!isset($_SESSION['username'])) {
	$_SESSION['pesan'] = "Dilarang Mengakses";
	header("location: login.php");
}
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="hal2.php">Hal 2</a>
<a href="hal3.php">Hal 3</a><br>
<a href="logout.php">Logout</a>
<?php include 'footer.php'; ?>
</body>
</html>