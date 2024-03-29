<?php include 'includes/dbh.php'; ?>
<?php include 'includes/functions.php'; ?>
<?php if (! isset($_SESSION['user_id'])) {
	header("Location: index.php");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Let'Share - Book Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/sweetalert.css">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
    	<div class="container-fluid px-0">
    		<a class="navbar-brand" href="products.php"><i class="fa fa-book"></i> Let's Share - Book Shop</a>
		  	<button class="navbar-toggler collapsed m-2" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="navbar-collapse collapse" id="navbarColor01" style="">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="products.php"> Products</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="customers.php"> Customers</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="manage_orders.php"> Orders</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="sales.php"> Sales</a>
			      </li>
			      <?php if (strtolower($_SESSION['role']) == 'admin'): ?>
			      <li class="nav-item">
			        <a class="nav-link" href="messages.php"> Messages</a>
			      </li>
			      	<li class="nav-item">
				       <a class="nav-link" href="users.php"> Users</a>
				    </li>
			      <?php endif ?>
			    </ul>
			    <ul class="nav navbar-nav ml-auto">
	            	<li class="nav-item dropdown mr-0">
		              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
		              	<?= $_SESSION['name'] ?> <span class="caret"></span>
		              </a>
		              <div class="dropdown-menu" style="min-width: 9rem">
		                <a class="dropdown-item" href="profile.php">
		                   <i class="fa fa-user"></i> My Profile
		                </a>
		                <div class="dropdown-divider"></div>
		                <a class="dropdown-item" href="includes/logout.php" onclick="return confirm('Are you sure you want to logout?')">
			               <i class="fa fa-lock"></i> Logout
			            </a>
		              </div>
		            </li>
	          	</ul>
			</div>
	    </div>
	</nav>