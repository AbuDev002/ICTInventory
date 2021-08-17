<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>IT Inventory System</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand">ICT Inventory System</a>
				</div>
			</nav>
			<div class="row">
				<div class="col-md-8">
				 left area
				</div>
				<div class="col-md-4">
						
						<div class="mb-3">
							<br>
							<br>
							<br>
							<?php
							 $mgs ="";
							 if(isset($_POST['btnLogin'])){
							 	$username = $_POST['username'];
							 	$password = $_POST['password'];
							 	$pass_hash = md5($password);
							 	if(empty($username) || empty($password)){
							 		$mgs ="<p class='alert alert-danger'>Please enter Username/Password</p>";
							 	}else{
							 		include_once('connection.php');
							 		$query = mysqli_query($connect,"select * from tbl_users WHERE user_name ='$username' AND password ='$pass_hash'");
							 		if($result = mysqli_num_rows($query) > 0){
							 			$data = mysqli_fetch_array($query);
							 			session_start();
							 			$_SESSION['username'] = $data['user_name'];
							 			header('location:dashboard.php');
							 		}else{
							 			$mgs ="<p class='alert alert-danger'>Invalid Username/Password</p>";
							 		}
							 	}
							 }
							?>
							<div class="card">
							<div class="card-header">
								Login Area
							</div>
						  <div class="card-body">
						  	<?php if(isset($mgs)){ echo $mgs;}?>
						    <form action="" method="POST">
							  <div class="mb-3">
								<!-- <label for="username" class="form-label">Username</label> -->
								<input type="text" name="username" class="form-control" id="username" placeholder="Username...">
								
							  </div>
							  <div class="mb-3">
								<!-- <label for="password" class="form-label">Password</label> -->
								<input type="password" name="password" class="form-control" id="password" placeholder="Enter password...">
							  </div>
							  <div class="mb-3 form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
							  </div>
							  <button type="submit" name="btnLogin"  class="btn btn-primary">Login</button>
							</form>
						  </div>
						</div>
							
						</div>
					
				</div>
			</div>
		</div>
		
		
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>