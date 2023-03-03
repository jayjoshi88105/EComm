<?php
  require('server/db.php');
  $stmt = $conn->prepare("SELECT * FROM products");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $products = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard Template for Bootstrap</title>
    <?php require('header.php'); ?>
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="row">
            <div class="col-md-3">
              <h2>Product List</h2>
            </div>
            <div class="col-md-3 offset-6">
              <a href="AddProduct.php"><input class="btn btn-success" type="button" value="Add Product"/></a>
            </div>
          </div>
          
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Status</th>
                  <th>Delete</th>
                  <th>Edit</th>
                  <th>Disable</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $cntr = 1;
                  foreach ($products as $value) {
                    ?>
                      <tr>
                        <td><?php echo $cntr; ?></td>
                        <td><?php echo $value['product_name']; ?></td>
                        <td><?php echo $value['category']; ?></td>
                        <td><?php echo $value['price']; ?></td>
                        <td><?php echo $value['stock']; ?></td>
                        <td>
                          <?php 
                            if($value['status'] == 1)
                            {
                              echo "Published";
                            }
                            else
                            {
                              echo "Un-Published";
                            }
                          ?>
                        </td>
                        <td><a href="server/deleteproduct.php?id=<?php echo $value['id'] ?>"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a></td>
                        <td><button type="button" class="btn btn-outline-primary btn-sm">Edit</button></td>
                        <td><button type="button" class="btn btn-outline-dark btn-sm">Disable</button></td>
                      </tr>
                    <?php
                      $cntr++;
                  }
                ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
