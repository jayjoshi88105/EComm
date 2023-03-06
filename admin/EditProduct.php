<?php
    require('server/db.php');

    $product_id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE id='$product_id'");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $products = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Add Product</title>
    <?php require('header.php'); ?>
    <link href="css/admin.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" action="server/updateproduct.php" method="POST">
      <div class="text-center mb-4">
        <h1 class="h3 mb-4 font-weight-normal">Add Product</h1>
      </div>

      <input type="hidden" name="id" value="<?php echo $product_id; ?>"/>

      <div class="form-label-group">
        <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name" value="<?php echo $products[0]['product_name'] ?>" required autofocus>
        <label for="product_name">Product Name</label>
      </div>

      <div class="form-label-group">
        <select class="form-control" name="category" value="<?php echo $products[0]['category']; ?>">
          <option value="">-Select Category-</option>
          <option value="Electronics">Electronics</option>
          <option value="Footware">Footware</option>
        </select>
      </div>

      <div class="form-label-group">
        <input type="text" name="price" id="price" class="form-control" placeholder="Price" value="<?php echo $products[0]['price'] ?>" required>
        <label for="price">Price</label>
      </div>

      <div class="form-label-group">
        <input type="text" name="stock" id="stock" class="form-control" placeholder="Stock" value="<?php echo $products[0]['stock'] ?>" required>
        <label for="stock">Stock</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit"><b>+ Update</b></button>
    </form>
  </body>
</html>