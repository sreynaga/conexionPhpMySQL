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
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td>Numero</td>
                <td>Nombre</td>
            </tr>
            <?php
            if (count($users)) {
                for ($i=0; $i<count($users); $i++) {
                ?>
                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $users[$i]["nombre"]; ?></td>
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