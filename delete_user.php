<?php
	if(isset($_GET['uid'])){
		include_once('connection.php');
		$uid = $_GET['uid'];
		$del_user = mysqli_query($connect,"DELETE from tbl_users WHERE id=$uid");
		if($del_user){
			echo "<script>alert('User deleted successfully')</script>";
			header('location:add_user.php');
		}
	}else{
		header('location:add_user.php');
	}
?>