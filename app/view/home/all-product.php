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
                        </form>
                    
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>