<?php require_once SERVER_ROOT . "\\data\\account_data_access.php";?>
<?php require_once SERVER_ROOT . "\\data\\getall_data_access.php";?>
<?php require_once SERVER_ROOT . "\\data\\product_data_access.php";?>
<?php
function getAllProduct() {
	return getAllProductsFromDb();
}

function getProductDetailsbyId($id) {
	$productList = getAllProductsFromDb();
	if (isset($productList)) {
		foreach ($productList as $product) {
			if ($product['pid'] == $id) {
				return $product;
			}
		}
	}
	return null;
}
function getSearchedProduct($key) {
	return getSearchedProductFromDb($key);
}
function addToCart($uid, $product) {
	addToCartinDb($uid, $product);
}
function getCartList($uid) {
	return getCartListFromDb($uid);
}
function totalOrder($uid) {
	return totalOrderInDb($uid);
}
function getCartInfo($uid) {
	$cartList = getCartListFromDb($uid);
	$totalPrice = 0;
	foreach ($cartList as $cart) {
		$totalPrice = $totalPrice + $cart['price'];
	}
	return $totalPrice;
}
?>