<!doctype html>
<html lang="en">
  <head>
    <title>Admin Login</title>
    <?php require('header.php'); ?>
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" action="server/userlogin.php" method="POST">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Admin Sign In</h1>
      </div>

      <div class="form-label-group">
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <label for="username">Username</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
        <label for="Password">Password</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <?php
        if($_SESSION['msg'])
        {
          $msg = $_SESSION['msg'];
          ?>
            <p style="text-align: center; color: red; margin-top: 10px;"><?php echo $msg; ?></p>
          <?php
        }
        unset($_SESSION['msg']);
      ?>
    </form>

  </body>
</html>