<?php
	require('db.php');

	$product_name = $_POST['product_name'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];

	try {
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "INSERT INTO products (product_name, category, price, stock) VALUES ('$product_name', '$category', $price, $stock)";
	  $result = $conn->exec($sql);
			  
	  if($result == 1)
	  {
	  	header('Location: ../ManageProducts.php');
	  }
	} catch(PDOException $e) {
	  echo $sql . "<br>" . $e->getMessage();
	}

	$conn = null;
?>