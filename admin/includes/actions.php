<?php 
// Include Connection and Functions files
include 'dbh.php';
include 'functions.php';

// New Product
if (isset($_POST['save-prod'])) {
	$title = $_POST['b-title'];
	$price = $_POST['b-price'];
	$image = $_FILES['b-image'];
	$descr = $_POST['b-descr'];

	// Upload images
	$path = "../../uploads/".uniqid().".jpg";
	$temp = $image['tmp_name'];

	$img = @file_get_contents($temp);
	$img = @imagecreatefromstring($img);
	if ($img !== false) {
	  imagejpeg($img, $path);
	  imagedestroy($img);
	  
	  // Adjust image path
	  $path = substr($path, 6);

	  // Then insert into db
	  $sql = mysqli_query($conn, "INSERT INTO products (title, price, pdesc, img, created_by) VALUES ('$title', '$price', '$descr', '$path', 'Mpemba')");
	  if ($sql) {
	  	header("Location: ../products.php?r=inserted");
		exit();
	  }
	}
}

// Delete Product
if (isset($_GET['act']) && $_GET['act'] == 'del_prod') {
	$p_info = fetch_data('products', 'id', $_GET['id'])[0];

	// Remove image first
	if (unlink("../../".$p_info['img'])) {
		// Then delete product information
		if (delete_data('products', 'id', $_GET['id'])) {
			header("Location: ../products.php?r=deleted");
			exit();
		}	
	}
}

// Delete Customer
if (isset($_GET['act']) && $_GET['act'] == 'del_cust') {

	if (delete_data('customers', 'id', $_GET['id'])) {
		header("Location: ../customers.php?r=deleted");
		exit();
	}	
}

// Process Order
if (isset($_GET['q']) && $_GET['q'] == 'po') {
	$type = $_GET['t'];
	$id = $_GET['id'];

	if ($type == 'ac') {
		$order = fetch_data('order_details', 'order_id', $id);
		foreach ($order as $data) {
			$sale = mysqli_query($conn, "INSERT INTO sales VALUES ('','".$data['order_id']."','".$data['book_id']."','".$data['qty']."','".$data['price']."', DEFAULT)");
		}
		
		$sql = mysqli_query($conn, "UPDATE orders SET status = 'accepted' WHERE id = '$id'");
	}else{
		$sql = mysqli_query($conn, "UPDATE orders SET status = 'declined' WHERE id = '$id'");
	}

	if ($sql) {
		header("Location: ../order_details.php?id=$id&r=processed");
		exit();
	}
}