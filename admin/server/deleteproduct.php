<?php
	require('db.php');

	$product_id = $_GET['id'];

	try {
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
	  $sql = "DELETE FROM products WHERE id=".$product_id;
	  
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