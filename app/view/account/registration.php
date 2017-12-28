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
                <form method="POST">
                    <br/>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>First name</td>
                            <td>:</td>
                            <td><input name="fname" type="text"></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td>Middle name</td>
                            <td>:</td>
                            <td><input name="mname" type="text"></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td>Last name</td>
                            <td>:</td>
                            <td><input name="lname" type="text"></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td>User name</td>
                            <td>:</td>
                            <td><input name="uname" type="text"></td>
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
                                <input name="gender" value=1 type="radio">Male
                                <input name="gender" value=2 type="radio">Female
                                <input name="gender" value=3 type="radio">Other
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
                            <td>Security Question</td>
                            <td>:</td>
                            <td>
                            <option value=></option>
                                <select name="question">
                                <?php
                                    if (isset($questionList)) {
                                        foreach ($questionList as $question) {
                                            echo "<option value=".$question['qid'].">".$question['question']."</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </td>
                            <td></td>
                        </tr> 
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td>Answer</td>
                            <td>:</td>
                            <td>
                                <input name="answer" type="text">
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
                    <?php if (isset($errorMsg)) {
                        echo $errorMsg;
                    } ?>
                </form>
            </fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>