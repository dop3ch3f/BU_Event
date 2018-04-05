<?php
	require "../actions/conn.php";
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		extract($_POST);
		$query = "INSERT INTO `venue`(`venue_name`, `capacity`, `description`) VALUES ('$venue_name','$capacity','$description')";
		if(mysqli_query($link, $query)){
			echo "Registered Successfully, Redirecting...";
			header( "refresh:2;url=http://localhost/BU_Event/php/admin/main.php" );
		}else{
			echo "Somethings Wrong".mysqli_error($link);
		}
	}
?>