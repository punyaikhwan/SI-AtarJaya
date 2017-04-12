<?php
	session_start();
	include 'connect.php';
	$username = $_SESSION["username"];
	$_SESSION["username"]=$username;
	$alamat = $_POST["alamat"];
	$metodekirim = $_POST["metodekirim"];
	$metodebayar = $_POST["metodebayar"];
	?>
	<html>
	<header>
	<body>
		<?php echo $alamat;?><br/>
		<?php echo $metodebayar;?><br/>
		<?php echo $metodekirim;?><br/>
	
	<?php
	$sql = "SELECT* FROM cart WHERE UsernamePelanggan = '$username'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$idTransaksi = $row["IdTransaksi"];
			echo $idTransaksi;
			$idBarang = $row["IdBarang"];
			echo $idBarang;
			$kuantitas = $row["Kuantitas"];
			echo $kuantitas;

			$sql = "INSERT INTO orderbarang (UsernamePelanggan, IdBarang, Jumlah, TanggalOrder, Alamat, MetodePembayaran, MetodePengiriman) VALUES ('$username', '$idBarang', '$kuantitas', CURRENT_TIMESTAMP, '$alamat','$metodebayar', '$metodekirim')";
			if(mysqli_query($conn, $sql)) {
				echo "sukses insert";
				$flag = 1;	
			}
		}
	}
	$sql = "DELETE FROM cart WHERE UsernamePelanggan='$username'";
	if(mysqli_query($conn, $sql)) {
		echo "sukses delete";
		$flag +=1;
	}
		?>
		<SCRIPT>
		window.location="../shop";
		</SCRIPT>
		<?php
?>
</body>
	</header>
	</html>