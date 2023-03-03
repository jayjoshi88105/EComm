<!doctype html>
<html lang="en">
  <head>
    <title>Add Product</title>
    <?php require('header.php'); ?>
    <link href="css/admin.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" action="server/addproduct.php" method="POST">
      <div class="text-center mb-4">
        <h1 class="h3 mb-4 font-weight-normal">Add Product</h1>
      </div>

      <div class="form-label-group">
        <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name" required autofocus>
        <label for="product_name">Product Name</label>
      </div>

      <div class="form-label-group">
        <select class="form-control" name="category">
          <option value="">-Select Category-</option>
          <option value="Electronics">Electronics</option>
          <option value="Footware">Footware</option>
        + Add <input type="text" name="price" id="price" class="form-control" placeholder="Price" required>
        <label for="price">Price</label>
      </div>

      <div class="form-label-group">
        <input type="text" name="stock" id="stock" class="form-control" placeholder="Stock" required>
        <label for="stock">Stock</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit"><b>+ Add</b></button>
    </form>
  </body>
</html>