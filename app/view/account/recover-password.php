<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                    <legend><b>RECOVER PASSWORD</b></legend>
                    <form method="POST">
                        <table>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input type="text" name="email"></td>
                            </tr>
                           
                            <td>Security Question</td>
                            <td>:</td>
                            <td>
                                <select>
                                    <option>ques1</option>
                                    <option>ques2</option>
                                    <option>ques3</option>
                                    <option>ques4</option>
                                    <option>ques5</option>
                                </select>
                            </td>
                            <td></td>
                        </tr> 
                            <tr>
                                <td>Answer</td>
                                <td>:</td>
                                <td><input type="password" name="password2"></td>
                            </tr>
                        </table>
                        <hr />
                        <input name="remember" type="checkbox">Remember Me
                        <br/><br/>
                        <input type="submit" value="Submit"> <br/>
                        <?php
                          if(isset($errorMsg)){
                             echo $errorMsg;
                          }
                        ?>
                    </form>
</fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>