<?php
	$view = SERVER_ROOT."\\app\\view\\$controller\\$action.php";
	//$indexUrl = APP_ROOT."/index.php?{controller}_index";
	require_once SERVER_ROOT."\\core\\account_service.php";
	//require_once SERVER_ROOT."\\core\\user_service.php";
?>
<?php
	switch ($action){
		case 'login':
			if ($_SERVER['REQUEST_METHOD']=="POST") {
				$user ['uname'] = $_POST['uname'];
				$user['pass'] = $_POST['password'];
				$isValid = validLogin($user);
				if (isset($isValid)) {
					session_start();
					$_SESSION['loggedUser'] = $isValid;
					header("location: ".APP_ROOT."/admin/?home_order-list");
				}
				$errorMsg = "Invalid username or password.";
			}
			break;
		default:
			break;
	}
	require_once $view;
?>
