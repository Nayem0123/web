<?php require_once SERVER_ROOT . "\\lib\\data_access.php";?>
<?php
function addToCartInDb($uid, $product) {
	$query = "INSERT INTO tbl_cart VALUES(null, " . $uid . ", " . $product['pid'] . ", '" . $product['name'] . "', " . $product['sprice'] . ")";
	return executeNonQuery($query);
}
function getCartListFromDb($uid) {
	$query = "SELECT * FROM tbl_cart WHERE uid=" . $uid;
	$result = executeQuery($query);
	if (mysqli_num_rows($result) == 0) {
		return null;
	}
	foreach ($result as $product) {
		$productList[] = $product;
	}
	return $productList;
}
function totalOrderInDb($uid) {
	echo $query = "SELECT * FROM tbl_cart WHERE uid=" . $uid;
	$result = executeQuery($query);
	echo $result = mysqli_num_rows($result);
	return $result;
}
?>