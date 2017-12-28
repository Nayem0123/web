<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <img width="100%" src="../images/image.jpg">
                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend><b>LOGIN</b></legend>
                <form>
                    <table>
                        <tr>
                            <td>User Name</td>
                            <td>:</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password"></td>
                        </tr>
                    </table>
                    <hr />
                    <input name="remember" type="checkbox">Remember Me
                    <br/><br/>
                    <input type="submit" value="Submit">        
                    <a href="recover-password.html">Forgot Password?</a>
                </form>
</fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>