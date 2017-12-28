<?php require_once SERVER_ROOT."\\data\\account_data_access.php"; ?>
<?php require_once SERVER_ROOT."\\data\\getall_data_access.php"; ?>
<?php
	function validLogin($user)
	{
		$userList = getAllUsersFromDb();
		if (isset($userList)) {
			foreach ($userList as $newUser) {
				if ($newUser['uname']==$user['uname'] && $newUser['pass']==$user['pass']) {
					return $newUser;
				}
			}
		}
		return null;
	}
	function getAllUsers()
	{
		return getAllUsersFromDb();
	}
	function registerUser($user)
	{
		$userList = getAllUsersFromDb();
		if (isset($userList)) {
			foreach ($userList as $newUser) {
				if ($newUser['uname']==$user['uname']) {
					return "Username already exist.";
				}
			}
		}
		$result = insertUserInDb($user);
		if ($result == 1) {
			return "Registered";
		}
		return "Failed";
	}
	function updateUser($user)
	{
		$result = updateUserInDb($user);
		if ($result==1) {
			$_SESSION['loggedUser'] = $user;
			return "Successfully updated.";
		}
		return "Update failed.";
	}
	function getAllQuestions()
	{
		return getAllQuestionsFromDb();
	}
	
?>