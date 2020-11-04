<?php
	$con = mysqli_connect('127.0.0.1', 'root','','vk');
	$query = mysqli_query($con, "SELECT * FROM friends");
	$text_zaprosa = "DELETE FROM friends WHERE id = '{$_GET['id']}'"; 
	mysqli_query($con, $text_zaprosa);
	header('Location: index.php');
 ?>