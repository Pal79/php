<?php

require_once("login.php");

if(isset($_POST["last_name"]) && isset($_POST["first_name"]) && isset($_POST["password"])) {
    if(!empty($_POST["last_name"]) && !empty($_POST["first_name"]) && !empty($_POST["password"])) {
?>
        <table>
            <tr>
                <th colspan="2" align="center">ADATOK</th>
            </tr>
            <tr>
                <td>Név:</td>
                <td>
                    <?php echo $_POST["last_name"] . " " . $_POST["first_name"]; ?>
                </td>
            </tr>
            <tr>
                <td>Jelszó:</td>
                <td>
                    <?php echo $_POST["password"]; ?>
                </td>
            </tr>
        </table>
<?php
    } else {
?>
        <table>
            <tr>
                <th>HIBA</th>
            </tr>
            <tr>
                <th>Minden mezőt ki kell tölteni!!!</th>
            </tr>
        </table>
<?php
    }
}

?>