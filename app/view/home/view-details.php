<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT . "\\app\\view\\public-top-panel.php";?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT . "\\app\\view\\left-panel.php";?>
        <td valign="top">
            <?php include_once SERVER_ROOT . "\\app\\view\\image-banner.php";?>
            <fieldset>
                    <legend><b>PRODUCT DETAILS</b></legend>
                    <form method="POST">
                    <br/>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td rowspan="7">
                                <img width="128" src=<?php echo APP_ROOT . "/admin/asset/images/" . $searchedProduct['photo']; ?>>
                            </td>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php if (isset($searchedProduct['name'])) {
	echo $searchedProduct['name'];
}?></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>:</td>
                            <td><?php if (isset($searchedProduct['sprice'])) {
	echo $searchedProduct['sprice'];
}?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" value="Add to cart"></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT . "\\app\\view\\footer.php";?>
</table>