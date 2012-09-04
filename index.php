<?php

require_once 'class/usuarios.php';

$obj = new Usuarios();
$users = $obj->getUsuarios();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <br />
        <table cellspacing="0" cellpadding="5" align="center">
            <tr style="background-color: #000; color: #fff; text-align: center; font-weight: bold;">
                <td>Numero</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Correo Electronico</td>
            </tr>
            <?php
            if (count($users)) {
                for ($i=0; $i<count($users); $i++) {
                ?>
                    <tr>
                        <td align="center"><?php echo $i+1; ?></td>
                        <td><?php echo $users[$i]["nombre"]; ?></td>
                        <td align="center"><?php echo $users[$i]["edad"]; ?></td>
                        <td><?php echo $users[$i]["email"]; ?></td>
                    </tr>
                <?php
                }
            } else {
            ?>
            <tr>
                <td colspan="2">No existen usuarios</td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>