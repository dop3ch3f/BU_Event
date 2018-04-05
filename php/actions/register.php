<?php
	require "./conn.php";
	session_start();
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		extract($_POST);
		
		switch($type){
			case 'student':
				if($password == $cpassword){
					$user_id = mt_rand(0,999).mt_rand(0,999)."/".$matric_no."/".$full_name;
					$query = "INSERT INTO `user`(`user_id`, `full_name`, `email`, `mobile`, `type`, `password`, `matric_no`, `department`) VALUES ('$user_id','$full_name','$email','$mobile','$type','$password','$matric_no','$department')";
					if(mysqli_query($link, $query)){
						echo "Registered Successfully, Redirecting..";
						$_SESSION['user_id'] = $user_id;
						header( "refresh:2;url=http://localhost/BU_Event/php/user/main.php" );
					}else{
						echo "Somethings wrong, Try again Later". mysqli_error($link);
					}
				}else{
					echo "Passwords do not match";
					header( "refresh:2;url=http://localhost/BU_Event/index.php" );
				}
				break;
			case 'staff':
				if($password == $cpassword){
					$user_id = mt_rand(0,999).mt_rand(0,999)."/".$staff_no."/".$full_name;
					$query = "INSERT INTO `user`(`user_id`, `full_name`, `email`, `mobile`, `type`, `password`, `department`, `staff_no`) VALUES ('$user_id','$full_name','$email','$mobile','$type','$password','$department','$staff_no')";
					if(mysqli_query($link, $query)){
						echo "Registered Successfully, Redirecting..";
						$_SESSION['user_id'] = $user_id;
						header( "refresh:2;url=http://localhost/BU_Event/php/user/main.php" );
					}else{
						echo "Somethings wrong, Try again Later". mysqli_error($link);
					}
				}else{
					echo "Passwords do not match";
					header( "refresh:2;url=http://localhost/BU_Event/index.php" );
				}
				break;
			case 'visitor':
				if($password == $cpassword){
				    $user_id = mt_rand(0,999).mt_rand(0,999)."/Visitor/".$full_name;
				    $query = "INSERT INTO `user`(`user_id`, `full_name`, `email`, `mobile`, `type`, `password`) VALUES ('$user_id','$full_name','$email','$mobile','$type','$password') LIMIT 1";
					if(mysqli_query($link, $query)){
						echo "Registered Successfully, Redirecting..";
						$_SESSION['user_id'] = $user_id;
						header( "refresh:2;url=http://localhost/BU_Event/php/user/main.php" );
					}else{
						echo "Somethings wrong, Try again Later". mysqli_error($link);
					}
				}else{
					echo "Passwords do not match";
					header( "refresh:2;url=http://localhost/BU_Event/index.php" );
				}
				break;
			default:
				echo "Hacker You are Being Watched";
				header( "refresh:2;url=http://localhost/BU_Event/index.php" );
		}
	}
	mysqli_close($link);
?>
