<?php
if(isset($_POST['adding_user'])){
	 $email = $_POST['email'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $name = $_POST['name'];
	 $role = $_POST['role'];
	 $pass_hash = md5($password);
	 include_once('../../connection.php');
	 $query = "INSERT INTO tbl_users (email,user_name,password,name,role) VALUES('$email','$username','$pass_hash','$name','$role')";
	 $query_run = mysqli_query($connect,$query);
	 if($query_run){
	 	//header('Content-type: application/json');
	 	//json_encode()
	 	echo $return ="success";
	 }else{
	 	echo $return ="failed";
	 }
}