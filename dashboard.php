<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
?>
<html>
<head>
	<title>ICT INVENTORY ITClass</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">ICT INVENTORY</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav> 
		<div class="row">
			<div class="col-md-4">
				<?php include_once('includes/menu.php');?>
			</div>
			<div class="col-md-8">
					<img src="images/img_dashboard.png" alt="Dashboard" class="w-100">

			</div>
		</div>

	</div>
	<?php include_once('includes/footer.php');?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>