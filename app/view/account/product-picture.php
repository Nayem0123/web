<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                <legend><b>PROFILE PICTURE</b></legend>
                <form>
                    <table>
                        <tr>
                            <td>User Name</td>
                            <td>:</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Picture</td>
                            <td>:</td>
                            <td><input type="file"></td>
                        </tr>
                    </table>
                    <hr />
                    <input type="submit" value="Submit">
                </form>
            </fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>