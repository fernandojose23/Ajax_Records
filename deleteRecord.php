<?php
	require("config/connect.php");

	$id = $_GET['id'];
	$query = "DELETE FROM records WHERE id = $id";
	$results = mysqli_query($connection, $query);
?>