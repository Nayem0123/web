<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <!--?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?-->
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                <legend><b>LOGIN</b></legend>
                <form method="POST">
                    <table>
                        <tr>
                            <td>User Name</td>
                            <td>:</td>
                            <td><input type="text" name="uname"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <?php
                                    if (isset($errorMsg)) {
                                        echo $errorMsg;
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <hr />
                    <input name="remember" type="checkbox">Remember Me
                    <br/><br/>
                    <input type="submit" value="Submit">        
                    <a href=<?php echo APP_ROOT."/?account_recover-password"; ?>>Forgot Password?</a>
                </form>
            </fieldset>
        </td>
    </tr>
</table>