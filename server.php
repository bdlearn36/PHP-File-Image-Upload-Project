<?php
session_start();
$db = new mysqli("localhost" , "root" , "", "image_upload");
/*if ($db) {
	echo "Database connected successfully";
}*/


if (isset($_POST['save'])) {
	$names = $_POST['name'];
	//$imges = $_POST['image'];

	if (isset($_FILES['image']['tmp_name'])) {
		$tmp_name = $_FILES['image']['tmp_name'];
		$target = "imagess/.";
		$name = $_FILES['image']['name'];
		move_uploaded_file($tmp_name,"$target/$name");
	}

	$images = $name;

	$saveData = $db->query("INSERT INTO image_table(name,image)VALUES('$names','$images')");
	$_SESSION['message'] = "Address saved sucessfully!"; 
		header('location: index.php');
}


$show = $db->query("SELECT * FROM image_table");



?>