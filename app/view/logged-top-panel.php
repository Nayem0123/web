<td colspan="2" valign="middle" height="70">
    <table width="100%">
        <tr>
            <td>
                <a href=<?php echo APP_ROOT; ?> style="text-decoration: none;">
                    <h2>MeemTECH</h2>
                </a>
            </td>
            <td align="right">
                <a href=<?php echo APP_ROOT . "/?account_cart-list"; ?>>Cart(
                    <?php if (isset($numberofOrder)) {echo $numberofOrder;}?>)</a>&nbsp;|
                <a href=<?php echo APP_ROOT . "/?account_profile"; ?>>Profile</a>&nbsp;|
                <a href=<?php echo APP_ROOT . "/?account_logout"; ?>>Logout</a>
            </td>
        </tr>
    </table>
</td>