<?php
	require('db.php');

	$product_id = $_GET['id'];
	$status = $_GET['status'];

	try {
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
	  $sql = "UPDATE products set status='$status' WHERE id=".$product_id;
	  
      //  die;

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