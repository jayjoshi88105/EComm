<!doctype html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <?php require('header.php'); ?>
    <link href="admin/css/admin.css" rel="stylesheet">
</head>

<body>
    <form class="form-signin" action="admin/server/userregister.php" method="POST" enctype="multipart/form-data">
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
        </div>

        <div class="form-label-group">
            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name Id">
            <label for="firstname">First Name</label>
        </div>

        <div class="form-label-group">
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name Id">
            <label for="lastname">Last Name</label>
        </div>

        <div class="form-label-group">
            <input type="text" name="city" id="city" class="form-control" placeholder="City">
            <label for="city">City</label>
        </div>

        <div class="form-label-group">
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
            <label for="phone">Phone</label>
        </div>

        <div class="form-label-group">
            <input type="text" name="emailid" id="emailid" class="form-control" placeholder="Email Id">
            <label for="emailid">Email Id</label>
        </div>

        <div class="form-label-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
            <label for="password">Password</label>
        </div>

        <div class="form-label-group">
            <input type="file" name="profilepic" id="profilepic" class="form-control">
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
        <p style="text-align:center; margin-top:5px;"><a href="Login.php">Login Here</a></p>
    </form>
</body>

</html>