<!--Get stats
untuk implementasi AJAX di tombol Add To Cart-->
<?php
	session_start();
	include "connect.php";
	$IdBarang = $_REQUEST["IdBarang"];
	$username = $_SESSION["username"];

	$sql = "SELECT* from cart WHERE username = '$username'"
	$sql = "INSERT INTO ";
	mysqli_query($conn, $sql);
	
    echo "<button class=\"delivered\">DELIVERED</button>";
?>