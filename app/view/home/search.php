<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT . "\\app\\view\\public-top-panel.php";?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT . "\\app\\view\\left-panel.php";?>
        <td valign="top">
            <?php include_once SERVER_ROOT . "\\app\\view\\image-banner.php";?>
            <fieldset>
                    <legend><b>Search</b></legend>
                    <form method="POST">
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
                <?php if (isset($searchList)) {
	echo "<fieldset>";
	echo "<legend><b>Products</b></legend>";
	foreach ($searchList as $search) {
		echo "<br/>
                        <table cellpadding='0' cellspacing='0'>
                            <tr>
                                <td rowspan='7'>
                                    <img width='128' src=" . APP_ROOT . "/admin/asset/images/" . $search['photo'] . ">
                                </td>
                                <td>Name</td>
                                <td>:</td>
                                <td>" . $search['name'] . "</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td>" . $search['sprice'] . "</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=" . APP_ROOT . "/?home_view-details&" . $search['pid'] . ">View details</a>
                                </td>
                            </tr>
                        </table><br><hr><br>";
	}
}?>
                <!--fieldset>
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
            </fieldset-->
        </td>
    </tr>
    <?php include_once SERVER_ROOT . "\\app\\view\\footer.php";?>
</table>