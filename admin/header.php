<?php
	session_start();
	$user = $_SESSION['username']; //Fetch value from session
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">E-Comm Ltd.</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
  			<?php
  				if($user)
  				{
  					?>
  						<a class="nav-link" href="server/logout.php">Welcome, <?php echo $user; ?> | Sign out</a>
  					<?php		
  				}
  			?>
        </li>
      </ul>
    </nav>
</body>
</html>