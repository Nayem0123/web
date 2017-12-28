<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT . "\\app\\view\\logged-top-panel.php";?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT . "\\app\\view\\left-panel.php";?>
        <td valign="top">
            <?php include_once SERVER_ROOT . "\\app\\view\\image-banner.php";?>
            <fieldset>
            <legend><b>PRODUCT DETAILS</b></legend>
            <form>
                <br/>
                <table cellpadding="0" cellspacing="50">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($cartList as $cart) {
	echo "<tr>
                            <td>" . $cart['pname'] . "</td>
                            <td>" . $cart['price'] . "</td>
                            <td><a href='#'>Change</a> |
                                <a href='#'>Delete</a>
                            </td>
                        </tr>";
}?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href=<?php echo APP_ROOT . "/?account_checkout"; ?>>Checkout</a></td>
                    </tr>
                </table>
            </form>
</fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT . "\\app\\view\\footer.php";?>
</table>