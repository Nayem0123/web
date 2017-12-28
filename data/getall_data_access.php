<?php require_once SERVER_ROOT."\\lib\\data_access.php"; ?>
<?php
	function getAllQuestionsFromDb()
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
	}
	function getAllProductsFromDb()
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