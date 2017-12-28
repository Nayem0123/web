<?php require_once SERVER_ROOT."\\lib\\data_access.php"; ?>
<?php
	/**function getAllQuestionsFromDb()
	{
		$query = "SELECT * FROM tbl_question";
		$result = executeQuery($query);
		if (mysqli_num_rows($result)==0) {
			return null;
		}
		while ($question = mysqli_fetch_assoc($result)) {
			$questionList[] = $question;
		}
		return $questionList;
	}**/
	function getAllCatagoryFromDb()
	{
		$query = "SELECT * FROM tbl_category";
		$result = executeQuery($query);
		if (mysqli_num_rows($result)==0) {
			return null;
		}
		while ($catagory = mysqli_fetch_assoc($result)) {
			$catagoryList[] = $catagory;
		}
		return $catagoryList;
	}
	function getAllCompanyFromDb()
	{
		$query = "SELECT * FROM tbl_company";
		$result = executeQuery($query);
		if (mysqli_num_rows($result)==0) {
			return null;
		}
		while ($company = mysqli_fetch_assoc($result)) {
			$companyList[] = $company;
		}
		return $companyList;
	}
	function getAllProductFromDb()
	{
		$query = "SELECT * FROM tbl_product";
		$result = executeQuery($query);
		if (mysqli_num_rows($result)==0) {
			return null;
		}
		while ($product = mysqli_fetch_assoc($result)) {
			$productList[] = $product;
		}
		return $productList;
	}
?>