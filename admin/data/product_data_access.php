<?php require_once SERVER_ROOT."\\lib\\data_access.php"; ?>
<?php
	function insertNewProductInDb($product)
	{
		$query = "INSERT INTO tbl_product VALUES(null, '".$product['pname']."',".$product['quantity'].",".$product['sprice'].",'".$product['pic']."',".$product['category'].",".$product['company'].")";
		return executeNonQuery($query);
	}
	function insertHistoryInDb($product)
	{
		$query = "INSERT INTO tbl_history VALUES('".$product['pname']."','".$product['date']."',".$product['quantity'].",".$product['bprice'].",".$product['sprice'].")";
		return executeNonQuery($query);
	}
	function insertNewCompanyInDb($company)
	{
		$query ="INSERT INTO tbl_company VALUES(null, '".$company['name']."')";
		return executeNonQuery($query);

	}
	function insertNewCategoryInDb($category)
	{
		echo $query ="INSERT INTO tbl_category VALUES(null, '".$category['name']."')";
		return executeNonQuery($query);
	}

?>