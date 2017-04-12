<!--Get stats
untuk implementasi AJAX-->
<?php
	session_start();
	include "connect.php";
	$emptyCart = $_REQUEST["emptyCart"];
	$username = $_SESSION["username"];
	$_SESSION["username"] = $username;

	if ($emptyCart == 'true') {
		$sql = "DELETE FROM cart WHERE UsernamePelanggan = '$username'";
	} else {
		$IdBarang = $_REQUEST["IdBarang"];

		$sql = "SELECT* from cart WHERE UsernamePelanggan = '$username' AND IdBarang = '$IdBarang'";
		$result = mysqli_query($conn, $sql); 
		if (mysqli_num_rows($result) > 0) {
			$sql = "UPDATE cart SET Kuantitas=Kuantitas+1 WHERE IdBarang='$IdBarang'";
		} else {
			$sql = "INSERT INTO cart VALUES(NULL, '$username', '$IdBarang', 1)";
		}
	}
	mysqli_query($conn, $sql);

	$sql = "SELECT Kuantitas, Harga from cart NATURAL JOIN barang WHERE UsernamePelanggan = '$username' AND cart.IdBarang = barang.IdBarang";
	$result = mysqli_query($conn, $sql);
	$total_cart = 0;
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$total_cart += $row["Kuantitas"]*$row["Harga"];
		}
	}

	echo "Rp"+$total_cart;
?>