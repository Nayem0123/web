<?php require_once SERVER_ROOT."\\lib\\data_access.php"; ?>
<?php
	function getAllUsersFromDb()
	{
		$query = "SELECT * FROM tbl_admin";
		$userList = executeQuery($query);
		if (mysqli_num_rows($userList)==0) {
			return null;
		}
		while ($user = mysqli_fetch_assoc($userList)) {
			$newUser[] = $user;
		}
		return $newUser;
	}
	function updateUserInDb($user)
	{
		$query = "UPDATE tbl_user SET fname='".$user['fname']."', mname='".$user['mname']."', lname='".$user['lname']."',email='".$user['email']."',dob='".$user['dob']."',gender=".$user['gender'].", contact='".$user['contact']."' WHERE uname='".$user['uname']."'";
		return executeNonQuery($query);
	}
	function insertUserInDb($user)
	{
		$query = "INSERT INTO tbl_user VALUES(null, '".$user['fname']."','".$user['mname']."', '".$user['lname']."','".$user['uname']."','".$user['email']."','".$user['pass']."','".$user['dob']."','".$user['joinning']."',".$user['gender'].",'".$user['contact']."','".$user['answer']."',".$user['question'].")";
		return executeNonQuery($query);
	}
?>