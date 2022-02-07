<?php 
	 $connection = mysqli_connect('localhost','root', '','presento');

  if($connection) {
    echo 'connected';
  }else {
    die('failed');
  }
  
	if(isset($_POST['email'])) {
		$email = $_POST['email'];


	$query = "INSERT INTO users (email)
		VALUES ('$email');";

		$query_result = mysqli_query($connection, $query);
		if(!$query_result) {
			die("query_result". mysqli_error($connection));
		}	
	}

 ?>