<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                    <legend>PROFILE</legend>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>Steve jobs</td>
                        </tr>       
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>Age</td>
                            <td>:</td>
                            <td>23</td>
                        </tr>       
                        <tr><td colspan="3"><hr/></td></tr>         
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>Male</td>
                        </tr>       
                        <tr><td colspan="3"><hr/></td></tr>         
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>example@mail.com</td>
                        </tr>       
                        <tr><td colspan="3"><hr/></td></tr>         
                        <tr>
                            <td>Contact</td>
                            <td>:</td>
                            <td>000000000</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    <hr>
                    <input type="submit" value="Update">
            </fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>