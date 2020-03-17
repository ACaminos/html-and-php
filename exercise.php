<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Ariel Caminos</title>
</head>
<body>
    <table border="1">
        <ul>
            <tr>
            <td>Tema</td>
            <td>
                <?php
                echo "PHP5";
                ?>
            </td>
            </tr>
            <tr>
            <td>Suma 7+15 :</td>
            <td>
                <?php
                $x=7;
                $y=15;
                echo $x+$y;
                ?>
            </td>
            </tr>
            <tr>
                <td>Multiplica 9*9</td>
                <td>
                <?php
                $numero=9;
                echo $numero*$numero;
                ?>
                </td>
            </tr>
            <tr>
                <td>Largo de cadena "Bienvenido a mi GitHub!"</td>
                <td>
                <?php
                echo strlen("Bienvenido a  mi GitHub!");
                ?>
                </td>
            </tr>
            <tr>
                <td>Encontrar "!" en cadena "Bienvenido a mi GitHub!"</td>
                <td>
                    <?php
                    echo strpos("Bienvenido a mi GitHub!", "!");
                    ?>
                </td>
            </tr>
            <tr>
            <td>Cree y llame a una función que muestre un mensaje "funcionMensaje()"</td>
            <td>
            <?php
                function funcionMensaje(){
                    echo "Ésto es un simple mensaje";
                }
                echo funcionMensaje();
                ?>
            </td>
            </tr>
            <tr>
                <td>Almacene su nombre, fecha de nacimiento y ciudad en un arregla "$misDatos[]" y miestre el tipo de dato con "var_dump[$misDatos]</td>
                <td>
                    <?php
                    $misDatos= array("Ariel", "05-07-1989", "Buenos Aires");
                    var_dump($misDatos);
                    ?>
                </td>
            </tr>
        </ul>
    </table>
</body>
</html>
