<?php
	require "./conn.php";
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		extract($_POST);
		
		if($email=='admin@bu.com' && $password=='excellency'){
		   header("Location:../admin/main.php");
		}else{
			$query = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
			$result = mysqli_query($link, $query);
			if(mysqli_num_rows($result)>0){
				$row = mysqli_fetch_assoc($result);
				$_SESSION['user_id']= $row['user_id'];
				header("Location:../user/main.php");
			}else{
				echo "We could'nt find that User. Try Again";
			}
		}
		
	}
	mysqli_close($link);
?>