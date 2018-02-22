<?php

	function editUser($id, $fname, $username, $password, $email) {
		include('connect.php');
		$userString = "INSERT INTO tbl_user VALUES(NULL,'{$fname}', '{$username}', '{$password}', '{$email}', NULL, NULL, 'no', NULL, NULL) WHERE user_id = '{$id}'";
		//echo $userString;
		$userQuery = mysqli_query($link, $userString);
		if($userQuery) {
			redirect_to("admin_index.php");
		}else{
			$message = "There was a problem editing this user.  Maybe go back to school and learn how to edit things.";
			return $message;
		}
		mysqli_close($link);
	}




?>
