<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table>
            <tr>
                <th clospan="2">
                    1-20-ig karakterek, szavak és számok szóközökkel ékezetes karakterek nélkül
                </th>
            </tr>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <tr>
                    <td>Írj be valamit:</td>
                    <td>
                        <input type="text" name="text">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Ellenőriz">
                    </td>
                </tr>
            </form>
            <tr>
                <td>Eredmény:</td>
                <td>
<?php

/**********************************************************
/^ minta indul
$/ - ig vizsgálja a bevitt adatot
\w szó (a számok is szavaknak számítanak, az ékezetes kara)
| vagy
\s szóköz
{1,20} 1 és 20 karakter
$/ minta zárul
**********************************************************/

if(isset($_POST["text"]) && !empty($_POST["text"])) {
    $text = $_POST["text"];
    if(preg_match("/^(\w|\s){1,20}$/", $text)) {
        echo "Helyes!";
    } else {
        echo "Nem helyes";
    }
}

?>
                </td>
            </tr>
            <tr>
                <td clospan="2">&nbsp;</td>
            </tr>
            <tr>
                <th colspan="2">Indiai irányítószám ellenőrzése</th>
            </tr>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <tr>
                    <td>Irányítószám megadása: </td>
                    <td>
                        <input type="text" name="indIrSz">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Ellenőriz">
                    </td>
                </tr>
            </form>
            <tr>
                <td>Eredmény:</td>
                <td>
<?php

/*****************************************************
pl.: A1B 2C3 (indiai irányítószám)
preg_match("/^[A-Z][0-9][A-Z]\s[0-9][A-Z][0-9]$/")
ha a minta végére sepicális módosítóként 'i'-t teszek,
akkor kis és nagybetűkre is igaz lesz
*****************************************************/

if(isset($_POST["indIrSz"]) && !empty($_POST["indIrSz"])) {
    $indIrSz = $_POST["indIrSz"];
    if(preg_match("/^[A-Z][0-9][A-Z]\s[0-9][A-Z][0-9]$/i", $indIrSz)) {
        echo "Helyes!";
    } else {
        echo "Nem helyes";
    }
}

?>
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <th colspan="2">Ameriaki típusú irányítószám ellenőrzése</th>
            </tr>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <tr>
                    <td>Irányítószám megadása:</td>
                    <td>
                        <input type="text" name="amIrSz">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Ellenőriz">
                    </td>
                </tr>
            </form>
            <tr>
                <td>Eredmény:</td>
                <td>
<?php

/*************************************************************************************
\d - számot vár
preg_match("/^\d{5}(-\d{4})?$/") // ami a mögött kérdőjel van, azt nem muszáj megadni
*************************************************************************************/

if(isset($_POST["amIrSz"]) && !empty($_POST["amIrSz"])) {
    $amIrSz = $_POST["amIrSz"];
    if(preg_match("/^\d{5}(-\d{4})?$/", $amIrSz)) {
        echo "Helyes!";
    } else {
        echo "Nem helyes";
    }
}

?>
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <th colspan="2">Email cím ellenőrzése:</th>
            </tr>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <tr>
                    <td>Email cím megadása:</td>
                    <td>
                        <input type="text" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Ellenőriz">
                    </td>
                </tr>
            </form>
            <tr>
                <td>Eredmény:</td>
                <td>
<?php

/*************************************
. jelentése: bármivel kezdődhet
+ jel jelentése: bármivel folytatódhat
pal.daniel.79@gmail.com
preg_match("/^.+@.+\.[a-z]{2,}$/");
*************************************/

if(isset($_POST["email"]) && !empty($_POST["email"])) {
    $email = $_POST["email"];
    if(preg_match("/^.+@.+\.[a-z]{2,}$/", $email)) {
        echo "Helyes!";
    } else {
        echo "Nem helyes";
    }
}

?>
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <th colspan="2">Ékezetes karakter ellenőrzés:</th>
            </tr>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <tr>
                    <td>Ékezetes karakter megadása:</td>
                    <td>
                        <input type="text" name="ekKar">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Ellenőriz">
                    </td>
                </tr>
            </form>
            <tr>
                <td>Eredmény:</td>
                <td>
<?php

/***********************************************
u módosítóval elfogadja az ékezetes karaktereket
preg_match("/^[a-zA-ZáéíóöőúüűÁÉÍÓÖŐÚÜŰ]$/u")
***********************************************/

if(isset($_POST["ekKar"]) && !empty($_POST["ekKar"])) {
    $ekKar = $_POST["ekKar"];
    if(preg_match("/^[a-zA-ZáéíóöőúüűÁÉÍÓÖŐÚÜŰ]$/u", $ekKar)) {
        echo "Helyes!";
    } else {
        echo "Nem helyes";
    }
}

?>
                </td>
            </tr>
        </table>
    </body>
</html>