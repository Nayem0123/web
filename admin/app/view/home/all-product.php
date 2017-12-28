<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                <legend><b>LATEST PRODUCT</b></legend>
                <form>
                    <br/>
                        <?php foreach ($productList as $product) { ?>
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <td rowspan="7">
                                        <img width="128" src=<?php echo APP_ROOT."/admin/asset/images/".$product['photo']; ?>>
                                    </td>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><?php echo $product['name']; ?></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>:</td>
                                    <td><?php echo $product['sprice']; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">View details</a>
                                    </td>
                                </tr>
                            </table><br><hr><br>
                        <?php } ?>
                    <!--table cellpadding="0" cellspacing="0">
                        <tr>
                            <td rowspan="7">
                                <img width="128" src=<?php echo APP_ROOT."/asset/images/imac.jpg"; ?>>
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
                                <a href="../logged/product-details.html">View details</a>
                            </td>
                        </tr>
                    </table><br><hr><br>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td rowspan="7">
                                <img width="128" src=<?php echo APP_ROOT."/asset/images/iphone-9.jpg"; ?>>
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
                                <img width="128" src=<?php echo APP_ROOT."/asset/images/iphone-x.jpg"; ?>>
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
                    </table-->        
                </form>
            </fieldset>
            <!--fieldset>
                <legend><b>CATEGORIES</b></legend>
                <form>
                    <br/>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td rowspan="7">
                                <img width="128" src=<?php echo APP_ROOT."/asset/images/macbook-air.jpg"; ?>>
                            </td>
                            <td>Category</td>
                            <td>:</td>
                            <td>Mobile</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">See all</a>
                            </td>
                        </tr>
                    </table><br><hr><br>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td rowspan="7">
                                <img width="128" src="../images/macbook-air.jpg"/>
                            </td>
                            <td>Category</td>
                            <td>:</td>
                            <td>Laptop</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">See all</a>
                            </td>
                        </tr>
                    </table><br><hr><br>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td rowspan="7">
                                <img width="128" src="../images/imac.jpg"/>
                            </td>
                            <td>Category</td>
                            <td>:</td>
                            <td>Desktop</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">See all</a>
                            </td>
                        </tr>
                    </table>        
                </form>
            </fieldset-->
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>