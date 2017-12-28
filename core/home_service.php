<?php require_once SERVER_ROOT."\\data\\account_data_access.php"; ?>
<?php require_once SERVER_ROOT."\\data\\getall_data_access.php"; ?>
<?php
	function getAllProduct()
	{
		return getAllProductsFromDb();
	}

	function getProductDetailsbyId($id)
	{
		$productList = getAllProductsFromDb();
		if (isset($productList)) {
			foreach ($productList as $product) {
				if ($product['pid']==$id) {
					return $product;
				}
			}
		}
		return null;
	}
?>