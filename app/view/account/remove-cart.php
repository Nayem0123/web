<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                    <legend><b>REMOVE CART</b></legend>
                    <form>
                        <br/>
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <td rowspan="7">
                                    <img width="128" src="../images/iphone-x.jpg"/>
                                </td>
                                <td>Name</td>
                                <td>:</td>
                                <td>IphoneX</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td>110000 BDT</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>:</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>:</td>
                                <td>220000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="submit" value="Remove from cart"></td>
                            </tr>
                        </table>
                    </form>
            </fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>