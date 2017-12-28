<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT . "\\app\\view\\public-top-panel.php";?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT . "\\app\\view\\left-panel.php";?>
        <td valign="top">
            <?php include_once SERVER_ROOT . "\\app\\view\\image-banner.php";?>
            <fieldset>
            <legend><b>CHECKOUT</b></legend>
            <form>
                <br/>
                <table cellpadding="0" cellspacing="50">
                    <tr>
                        <td>Total shopping</td>
                        <td></td>
                        <td></td>
                        <td><?php if (isset($totalPrice)) {echo $totalPrice;}?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address"></td>
                    </tr>
                    <tr>
                        <td>Payment method</td>
                        <td><input type="radio" value="1" name="payment">BKash</td>
                        <td><input type="radio" value="2" name="payment">Rocket</td>
                        <td><input type="radio" value="3" name="payment">Visa</td>
                        <td><input type="radio" value="4" name="payment">Master card</td>
                    </tr>
                    <tr>
                        <td>Transaction id</td>
                        <td>:</td>
                        <td><input type="text" name="trid"></td>
                    </tr>
                    <tr>
                        <td>PIN</td>
                        <td>:</td>
                        <td><input type="number" name="pin"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Confirm"></td>
                    </tr>
                </table>
            </form>
    </fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT . "\\app\\view\\footer.php";?>
</table>