<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                <legend><b>Add Product</b></legend>
                <form method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>Product Name</td>
                            <td>:</td>
                            <td><input type="text" name="pname"></td>
                        </tr>
                        <tr>
                            <td>Product Quantity</td>
                            <td>:</td>
                            <td><input type="number" name="quantity"></td>
                        </tr>
                        <tr>
                            <td>Selling Price</td>
                            <td>:</td>
                            <td><input type="text" name="sprice"></td>
                        </tr>
                        <tr>
                            <td>Buying Price</td>
                            <td>:</td>
                            <td><input type="text" name="bprice"></td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td>:</td>
                            <td><input type="file" name="image"></td>
                        </tr>
                        <tr>
                            <td>Catagory</td>
                            <td>:</td>
                            <td>
                            <select name="category">
                                <?php
                                    foreach ($categoryList as $category) {
                                        echo "<option value=".$category['cat_id'].">".$category['cat_name']."</option>";
                                    }
                                ?>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Company Name</td>
                            <td>:</td>
                            <td>
                            <select name="company">
                                <?php
                                    foreach ($companyList as $company) {
                                        echo "<option value=".$company['com_id'].">".$company['name']."</option>";
                                    }
                                ?>
                            </select>
                            </td>
                        </tr>                        
                    </table>
                    <hr/>
                    <input type="submit" value="ADD">
                    <?php
                        if (isset($errorMsg)) {
                            echo $errorMsg;
                        }
                    ?>     
                </form>
            </fieldset>
        </td>
    </tr>
</table>