<?php
	require('db.php');

    $product_id = $_POST['id'];
	$product_name = $_POST['product_name'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];

	try {
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "UPDATE products SET product_name='$product_name',category='$category',price='$price',stock='$stock' WHERE id='$product_id'";
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