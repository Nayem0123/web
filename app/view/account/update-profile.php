<?php  if (isset($_SESSION['loggedUser'])) {
    $loggedUser = $_SESSION['loggedUser'];
} ?>
<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\logged-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <form method="POST">
                <fieldset>
                    <legend>PROFILE</legend>
                    <input type="hidden" name="uname" value=
                    <?php if (isset($loggedUser['uname'])) {
                        echo $loggedUser['uname'];
                    }
                    ?>>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td>First name</td>
                            <td>:</td>
                            <td><input type="text" name="fname" value=
                            <?php if (isset($loggedUser['fname'])) {
                                echo $loggedUser['fname'];
                            } ?>></td>
                        </tr>
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>Middle name</td>
                            <td>:</td>
                            <td><input type="text" name="mname" value=
                            <?php if (isset($loggedUser['mname'])) {
                                echo $loggedUser['mname'];
                            } ?>></td>
                        </tr>
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>Last name</td>
                            <td>:</td>
                            <td><input type="text" name="lname" value=
                            <?php if (isset($loggedUser['lname'])) {
                                echo $loggedUser['lname'];
                            } ?>></td>
                        </tr>
                        <tr><td colspan="3"><hr/></td></tr>
                        <tr>
                            <td>Date of birth</td>
                            <td>:</td>
                            <td><input type="date" name="dob" value=
                            <?php if (isset($loggedUser['dob'])) {
                                echo $loggedUser['dob'];
                            } ?>></td>
                        </tr>       
                        <tr><td colspan="3"><hr/></td></tr>         
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>
                                <input type="radio" value=1 name="gender"
                                <?php if (isset($loggedUser['gender'])) {
                                    if ($loggedUser['gender']==1) {
                                        echo "checked";
                                    }
                                } ?>
                                >Male<br>
                                <input type="radio" value=2 name="gender"
                                <?php if (isset($loggedUser['gender'])) {
                                    if ($loggedUser['gender']==2) {
                                        echo "checked";
                                    }
                                } ?>
                                >Female<br>
                                <input type="radio" value=3 name="gender"
                                <?php if (isset($loggedUser['gender'])) {
                                    if ($loggedUser['gender']==3) {
                                        echo "checked";
                                    }
                                } ?>
                                >Other<br>
                            </td>
                        </tr>       
                        <tr><td colspan="3"><hr/></td></tr>         
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><input type="text" name="email" value=
                            <?php if (isset($loggedUser['email'])) {
                                echo $loggedUser['email'];
                            } ?>></td>
                        </tr>       
                        <tr><td colspan="3"><hr/></td></tr>         
                        <tr>
                            <td>Contact</td>
                            <td>:</td>
                            <td><input type="text" name="contact" value=
                            <?php if (isset($loggedUser['contact'])) {
                                echo $loggedUser['contact'];
                            } ?>></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    <hr>
                    <input type="submit" value="Update">
                    <?php
                        if (isset($errorMsg)) {
                            echo $errorMsg;
                        }
                    ?>
                </fieldset>
            </form>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>