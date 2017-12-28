<?php
$view = SERVER_ROOT . "\\app\\view\\$controller\\$action.php";
//$indexUrl = APP_ROOT."/index.php?{controller}_index";
require_once SERVER_ROOT . "\\core\\account_service.php";
require_once SERVER_ROOT . "\\core\\home_service.php";
?>
<?php
switch ($action) {
case 'login':
	$errorMsg = '';
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$user['uname'] = $_POST['uname'];
		$user['pass'] = $_POST['password'];
		$isValid = validLogin($user);
		if (isset($isValid)) {
			session_start();
			$_SESSION['loggedUser'] = $isValid;
			header("location: " . APP_ROOT . "/?account_update-profile");
		}
		$errorMsg = "Invalid username or password.";
	}
	break;
case 'update-profile':
	$errorMsg = '';
	session_start();
	if (!isset($_SESSION['loggedUser'])) {
		header("location: " . APP_ROOT . "/?account_login");
	}
	if (isset($_SESSION['loggedUser'])) {
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$newUser['uname'] = $_POST['uname'];
			$newUser['fname'] = $_POST['fname'];
			$newUser['mname'] = $_POST['mname'];
			$newUser['lname'] = $_POST['lname'];
			$newUser['dob'] = $_POST['dob'];
			$newUser['gender'] = $_POST['gender'];
			$newUser['email'] = $_POST['email'];
			$newUser['contact'] = $_POST['contact'];
			$errorMsg = updateUser($newUser);
		}
	}
	break;
case 'logout':
	session_start();
	session_destroy();
	header("location: " . APP_ROOT);
	break;
case 'registration':
	$errorMsg = "";
	$questionList = getAllQuestions();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$newUser['fname'] = $_POST['fname'];
		$newUser['mname'] = $_POST['mname'];
		$newUser['lname'] = $_POST['lname'];
		$newUser['uname'] = $_POST['uname'];
		$newUser['dob'] = $_POST['dob'];
		$newUser['gender'] = $_POST['gender'];
		$newUser['email'] = $_POST['email'];
		$newUser['contact'] = $_POST['contact'];
		$newUser['question'] = $_POST['question'];
		$newUser['answer'] = $_POST['answer'];
		$newUser['pass'] = $_POST['password'];
		$newUser['joinning'] = date("Y-m-d");
		if ($_POST['confirmPassword'] != $_POST['password']) {
			$errorMsg = "password not matched";
		} else {
			$errorMsg = registerUser($newUser);
		}
	}
	break;
case 'cart-list':
	session_start();
	$cartList = getCartList($_SESSION['loggedUser']['uid']);
	break;
case 'checkout':
	session_start();
	if (count($_GET) > 0) {
		$key = array_keys($_GET)[1];
		$totalPrice = getCartInfo($_SESSION['loggedUser']['uid']);
	}
	/**if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$order['uid'] = $_SESSION['loggedUser']['uid'];
		$order['totalPrice'] = $totalPrice;
		$order['address'] =
	}**/
	break;
default:
	break;
}
require_once $view;
?>
