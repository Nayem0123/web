<table width="65%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\logged-top-panel.php"; ?>
    </tr>
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                <legend>ADD CATEGORY</legend>
                <form method="POST">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td>Category name</td>
                            <td>:</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                    </table>
                    <input type="submit" value="Add"><br><br>
                    <?php
                        if (isset($errorMsg)) {
                            echo $errorMsg;
                        }
                    ?>
                </form>
            </fieldset>
            <fieldset>
                <legend>UPDATE CATEGORY</legend>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <?php
                            foreach ($categoryList as $category) {
                                echo "<tr>";
                                echo "<td>".$category['cat_name']."</td><td><td>";
                                //echo "<td><a href='".APP_ROOT."/?home_update-company&".$company['com_id']."'>Update</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tr>
                </table>
            </fieldset>
        </td>
    </tr>
    <tr>
        <td></td>
        <td align="center">
            Copyright &copy; 2017
        </td>
    </tr>
</table>