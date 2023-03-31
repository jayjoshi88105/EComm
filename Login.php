<!doctype html>
<html lang="en">

<head>
    <title>Customer Login</title>
    <?php require('header.php'); ?>
    <link href="admin/css/admin.css" rel="stylesheet">
</head>

<body>
    <form class="form-signin" action="admin/server/userlogin.php" method="POST">
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
        </div>

        <div class="form-label-group">
            <input type="text" name="username" id="username" class="form-control" placeholder="Email" required
                autofocus>
            <label for="username">Username</label>
        </div>

        <div class="form-label-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
            <label for="password">Password</label>
        </div>

        <input type="hidden" name="role" value="user"/>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p style="text-align:center; margin-top:5px;"><a href="Register.php">New User?</a></p>
        <?php
        if ($_SESSION['msg']) {
            $msg = $_SESSION['msg'];
            ?>
            <p style="text-align: center; color: red; margin-top: 10px;">
                <?php echo $msg; ?>
            </p>
            <?php
        }
        unset($_SESSION['msg']);
        ?>
    </form>

</body>

</html>