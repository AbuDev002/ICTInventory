<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
?>
<html>
<head>
	<title>Dashboad</title>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
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
		<ul class="nav justify-content-end">
			<li class="nav-item">
				<a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User</a>
			</li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<?php include_once('includes/menu.php');?>
			</div>
			<div class="col-md-9">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Email</th>
							<th>Username</th>
							<th>Name</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="usersList">
						
					</tbody>
				</table>

			</div>
		</div>

	</div>
	<?php include_once('modals/users/addusers_modal.php');?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function (){
			getdata();
		});

		//adding new user to database using ajax
		$('#addUser').click(function(e){
			e.preventDefault();
			var email = $('.email').val();
			var username = $('.username').val();
			var password = $('.password').val();
			var name = $('.name').val();
			var role = $('.role').val();
			if(email !="" & username !="" & password !="" & name !="" & role !=""){
				$.ajax({
					url:'scripts/users/addUsers.php',
					type:'POST',
					data:{
						'adding_user':true,
						'email':email,
						'username':username,
						'password':password,
						'name':name,
						'role':role,
					},
					success: function(response){
						//alert('Inserted successfuly');
						 $('#usersList').html("");
						 getdata();
						 $('.email').val('');
						 $('.username').val('');
						 $('.password').val('');
						 $('.name').val('');
						 $('.role').val('');
					}
				});

			}else{
				alert('Please enter all the form field');
			}
		});

		//this function fetches list of users registered in the applicaton
		function getdata(){
			$.ajax({
				url: 'scripts/users/getUsersList.php',
				type: 'GET',
				success: function(response) {
              //called when successful
              
              $.each(response, function(key, value) {
              	/* iterate through array or object */
              	$('#usersList').append('<tr>'+
              		'<td class="user_id">'+value['id']+'</td>\
              		<td>'+value['email']+'</td>\
              		<td>'+value['user_name']+'</td>\
              		<td>'+value['name']+'</td>\
              		<td>'+value['role']+'</td>\
              		<td>\
              		<a href="#" class="badge btn-info viewbtn">View</a>\
              		<a href="#" class="badge btn-primary edit_btn">Edit</a>\
              		<a href="#" class="badge btn-danger delete_btn">Delete</a>\
              		</td>\
              		</tr>');
              });
          }

      });

		}
	</script>
</body>
</html>