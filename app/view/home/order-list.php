<table width="80%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\public-top-panel.php"; ?>
    </tr>
    <tr>
        <?php include_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
            <?php include_once SERVER_ROOT."\\app\\view\\image-banner.php"; ?>
            <fieldset>
                <legend><b>ORDER LIST</b></legend>
                <form method="POST">
                    <table border="1">
                        <tr>
                            <td>Order ID</td>
                            <td>USer Name</td>
                            <td>Address</td>
                            <td>Date</td>
                            <td>Status</td>
                        </tr>
                        
                     </table>   
                </form>
            </fieldset>
        </td>
    </tr>
    <?php include_once SERVER_ROOT."\\app\\view\\footer.php"; ?>
</table>