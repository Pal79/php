<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <table>
                <tr>
                    <td>
                        Vezetéknév:
                    </td>
                    <td>
                        <input type="text" name="last_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        Keresztnév:
                    </td>
                    <td>
                        <input type="text" name="first_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        Jelszó:
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Elküld">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>