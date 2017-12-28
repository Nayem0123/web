<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
            <legend><b>REGISTRATION</b></legend>
            <form>
                <br/>
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>First name</td>
                        <td>:</td>
                        <td><input name="fName" type="text"></td>
                        <td></td>
                    </tr>
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td>Middle name</td>
                        <td>:</td>
                        <td><input name="mName" type="text"></td>
                        <td></td>
                    </tr>
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td>Last name</td>
                        <td>:</td>
                        <td><input name="lName" type="text"></td>
                        <td></td>
                    </tr>
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td>User name</td>
                        <td>:</td>
                        <td><input name="uName" type="text"></td>
                        <td></td>
                    </tr>
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td valign="top">Date of Birth</td>
                        <td valign="top">:</td>
                        <td>
                            <input name="dob" type="date">
                            <br/>
                            <font size="2"><i>(dd/mm/yyyy)</i></font>
                        </td>
                    </tr>
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>   
                            <input name="gender" type="radio">Male
                            <input name="gender" type="radio">Female
                            <input name="gender" type="radio">Other
                        </td>
                        <td></td>
                    </tr>       
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                            <input name="email" type="text">
                        </td>
                        <td></td>
                    </tr>   
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td>Contact</td>
                        <td>:</td>
                        <td>
                            <input name="contact" type="text">
                        </td>
                        <td></td>
                    </tr>   
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input name="password" type="password"></td>
                        <td></td>
                    </tr>       
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td>:</td>
                        <td><input name="confirmPassword" type="password"></td>
                        <td></td>
                    </tr>
                </table>
                <hr/>
                <input type="submit" value="Submit">
                <input type="reset">
            </form>
</fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>