<?php
require('db.php'); //To import file in PHP file

$product_name = $_POST['product_name'];
$description = $_POST['description'];
$category = $_POST['category'];
$price = $_POST['price'];
$stock = $_POST['stock'];

/////
if (isset($_FILES['product_thumb'])) {
	$errors = array();
	$file_size = $_FILES['product_thumb']['size'];
	$file_tmp = $_FILES['product_thumb']['tmp_name'];
	$file_type = $_FILES['product_thumb']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['product_thumb']['name'])));
	$file_name = strtotime(date("Y-m-d H:i:s")) . "." . $file_ext;

	$extensions = array("jpeg", "jpg", "png");

	if (in_array($file_ext, $extensions) === false) {
		$errors[] = "extension not allowed, please choose a JPEG or PNG file.";
	}

	if ($file_size > 2097152) {
		$errors[] = 'File size must be excately 2 MB';
	}

	if (empty($errors) == true) {
		chmod("../product_thumb/", 0755);
		move_uploaded_file($file_tmp, "../product_thumb/" . $file_name);
		echo "Success";
	} else {
		print_r($errors);
	}
}
/////

try {
	$sql = "INSERT INTO products (product_name, description, category, price, stock, image) VALUES ('$product_name', '$description','$category', $price, $stock, '$file_name')";
	
	$result = $conn->exec($sql);

	if ($result == 1) {
		header('Location: ../ManageProducts.php');
	}
} catch (PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>