<?php
	$view = SERVER_ROOT."\\app\\view\\$controller\\$action.php";
	//$indexUrl = APP_ROOT."/index.php?{controller}_index";
	require_once SERVER_ROOT."\\core\\account_service.php";
	require_once SERVER_ROOT."\\core\\home_service.php";
	//require_once SERVER_ROOT."\\core\\user_service.php";
?>
<?php
	switch ($action){
		case 'product':
			$errorMsg = '';
			$categoryList = getAllCategory();
			$companyList = getAllCompany();
			if ($_SERVER['REQUEST_METHOD']=="POST") {
				$product['pname'] = $_POST['pname'];
				$product['quantity'] = $_POST['quantity'];
				$product['sprice'] = $_POST['sprice'];
				$product['bprice'] = $_POST['bprice'];
				$product['category'] = $_POST['category'];
				$product['company'] = $_POST['company'];
				$product['date'] = date("Y-m-d");
				
				$location = SERVER_ROOT."\\asset\\images\\";
				$fileName = explode('.', $_FILES['image']['name']);
				$tempName = $_FILES['image']['tmp_name'];
				$pic = $_POST['pname'].".".$fileName[1];
				if(!empty($fileName)) {
					if (move_uploaded_file($tempName, $location.$pic)) {
						$product['pic'] = $pic;
						$errorMsg = addNewProduct($product);
						//header("location: ".APP_ROOT."/?admin_full-profile");
					}else {
						$errorMsg='An error occured,please try again';
					}
				}
				//$errorMsg = addNewProduct($product);
			}
			break;
		case 'all-product':
			$productList = getAllProduct();
			break;
		case 'company':
			$errorMsg = '';
			$companyList = getAllCompany();	
			if ($_SERVER['REQUEST_METHOD']=="POST"){
				$company['name'] = $_POST['name'];
				$result = addNewCompany($company);
				if($result == 1)
				{
					header("location: ".APP_ROOT."/admin/?home_company");
				}
				else
				{
					$errorMsg = "Wrong Company";
				}
			}
			break;
		case 'update-company':
			$errorMsg = '';
			break;
	    case 'category':
			$errorMsg = '';
			$categoryList = getAllCategory();	
			if ($_SERVER['REQUEST_METHOD']=="POST"){
				$category['name'] = $_POST['name'];
				$result = addNewCategory($category);
				if($result == 1)
				{
					header("location: ".APP_ROOT."/admin/?home_category");
				}
				else
				{
					$errorMsg = "Wrong Category";
				}
			}
			break;
		default:
			break;
	}
	require_once $view;
?>
