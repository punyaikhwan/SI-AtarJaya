<!--Get stats
untuk implementasi AJAX-->
<?php
	session_start();
	include "connect.php";
	$username = $_SESSION["username"];
	$_SESSION["username"] = $username;
	$kuantitas = $_REQUEST["Kuantitas"];
	$idTransaksi = $_REQUEST["IdTransaksi"];
	$deletedID = $_REQUEST["deletedID"];

	if($deletedID == "") {
		$sql = "UPDATE cart SET Kuantitas = '$kuantitas' WHERE IdTransaksi = '$idTransaksi'";		
	} else {
		$sql = "DELETE FROM cart WHERE IdTransaksi = '$deletedID'";
	}
	mysqli_query($conn, $sql);
?>