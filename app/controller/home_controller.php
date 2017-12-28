<?php
$view = SERVER_ROOT . "\\app\\view\\$controller\\$action.php";
//$indexUrl = APP_ROOT."/index.php?{controller}_index";
require_once SERVER_ROOT . "\\core\\account_service.php";
require_once SERVER_ROOT . "\\core\\home_service.php";
//require_once SERVER_ROOT."\\core\\user_service.php";
?>
<?php
if (isset($_SESSION['loggedUser'])) {
	$numberofOrder = totalOrder($_SESSION['loggedUser']['uid']);
}
switch ($action) {
case 'index':
	$productList = getAllProduct();
	break;
case 'all-product':
	$productList = getAllProduct();
	break;
case 'view-details':
	$errorMsg = '';
	if (count($_GET) > 0) {
		$key = array_keys($_GET)[1];
		$searchedProduct = getProductDetailsbyId($key);
	}
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		session_start();
		if (!isset($_SESSION['loggedUser'])) {
			header("location: " . APP_ROOT . "/?account_login");
		} else {
			$result = addToCart($_SESSION['loggedUser']['uid'], $searchedProduct);
			if ($result == 1) {
				$errorMsg = "Added to cart";
			} else {
				$errorMsg = "Add failed";
			}
		}
	}
	break;
case 'search':
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$key = $_POST['pname'];
		$searchList = getSearchedProduct($key);
	}
	break;
default:
	break;
}
require_once $view;
?>
