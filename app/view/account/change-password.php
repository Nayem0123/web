<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                    <legend><b>CHANGE PASSWORD</b></legend>
                    <form>
                        <table>
                            <tr>
                                <td><font size="3">Current Password</font></td>
                                <td>:</td>
                                <td><input type="password" /></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><font size="3" color="green">New Password</font></td>
                                <td>:</td>
                                <td><input type="password" /></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><font size="3" color="red">Retype New Password</font></td>
                                <td>:</td>
                                <td><input type="password" /></td>
                                <td></td>
                            </tr>
                        </table>
                        <hr />
                        <input type="submit" value="Submit" />
                    </form>
</fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>