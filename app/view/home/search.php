<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                    <legend><b>Search</b></legend>
                    <form>
                        <br/>
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><input type="text" name="pname"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="submit" value="Search"></td>
                            </tr>
                        </table>        
                    </form>
                </fieldset>
                <fieldset>
                    <legend><b>Products</b></legend>
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
                                <td>
                                    <a href="#">View details</a>
                                </td>
                            </tr>
                        </table><br><hr><br>
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
                                <td>
                                    <a href="#">View details</a>
                                </td>
                            </tr>
                        </table><br><hr><br>
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
                                <td>
                                    <a href="#">View details</a>
                                </td>
                            </tr>
                        </table>        
                    </form>
</fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>