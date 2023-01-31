<?php
	 $con = mysqli_connect('localhost','root');
	 if ($con) {
	 	echo "Connection Succesfull";
	 }
	 mysqli_select_db($con,'userdata');
	 $user = $_POST['user'];
	 $email = $_POST['email'];
	 $mobile = $_POST['mobile'];
	 $comment = $_POST['comment'];

	 $query = "INSERT INTO userinfo(Name,Email,Mobile,Comment) values('$user','$email','$mobile','$comment')";
	 echo "$query";
	 mysqli_query($con,$query);
	 header('location:index.php');
?>