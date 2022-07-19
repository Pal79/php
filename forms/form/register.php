<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Pál Dániel">
        <meta name="description" content="from, űrlap, pratctice, gyakorlás">
        <title>register</title>
    </head>

    <body>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Adatok felvétele</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Név:</td>
                        <td>
                            <input type="text" name="name"> * <?php echo $nameErr; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Felhasználó név:</td>
                        <td>
                            <input type="text" name="userName"> * <?php echo $userNameErr; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="email" name="email"> * <?php echo $emailErr; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jelszó:</td>
                        <td>
                            <input type="password" name="password"> * <?php echo $passwordErr; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Magamról:</td>
                        <td>
                            <textarea name="forMySelf" id="" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Nemed:</td>
                        <td>
                            <input type="radio" name="gender" value="Nő">Nő
                            <input type="radio" name="gender" value="Férfi">Férfi
                            <input type="radio" name="gender" value="Egyéb">Egyéb
                        </td>
                    </tr>
                    <tr>
                        <td>Háziállatok</td>
                        <td>
                            <input type="checkbox" name="pets[]" id="" value="Kutya">Kutya
                            <input type="checkbox" name="pets[]" id="" value="Macska">Macska
                            <input type="checkbox" name="pets[]" id="" value="Hal">Hal
                            <input type="checkbox" name="pets[]" id="" value="Teknős">Teknős
                        </td>
                    </tr>
                    <tr>
                        <td>Tanult programnyelvek:</td>
                        <td>
                            <select name="progLangs[]" id="" multiple="multiple">
                                <option value="php">php</option>
                                <option value="mysql">mysql</option>
                                <option value="css">css</option>
                                <option value="scss">scss</option>
                                <option value="javascript">javascript</option>
                                <option value="actionscript">actionscript</option>
                                <option value="java">java</option>
                                <option value="c">c</option>
                                <option value="c++">c++</option>
                                <option value="c#">c#</option>
                            </select> * <?php echo $progLangsErr; ?>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Elküld">
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
        <br><hr>
    </body>
</html>