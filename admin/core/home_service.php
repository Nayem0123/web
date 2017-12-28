<?php require_once SERVER_ROOT."\\data\\account_data_access.php"; ?>
<?php require_once SERVER_ROOT."\\data\\getall_data_access.php"; ?>
<?php require_once SERVER_ROOT."\\data\\product_data_access.php"; ?>
<?php
	function getAllCategory()
	{
		return getAllCatagoryFromDb();
	}
	function getAllCompany()
	{
		return getAllCompanyFromDb();
	}
	function addNewProduct($product)
	{
		$result = insertNewProductInDb($product);
		if ($result == 1 ) {
			$result = insertHistoryInDb($product);
			if ($result == 1) {
				return "Added";
			}
		}
		return "Failed";
	}

	function addNewCompany($company)
	{
		return insertNewCompanyInDb($company);
	}
	function addNewCategory($category)
	{
		return insertNewCategoryInDb($category);
	}
	function getAllProduct(){
		return getAllProductFromDb();
	}
	function getProductDetailsbyId($id)
	{
		$productList = getAllProductFromDb();
		if (isset($productList)) {
			foreach ($productList as $product) {
				if ($product['id']==$id) {
					return $product;
				}
			}
		}
		return null;
	}


?>