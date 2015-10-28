<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 28/10/2015
 * Time: 05:55 PM
 */

if (sizeof($_POST) == 0) {
    header('Location: index.php?route=unidades');
}

$codigo = $_POST['id_unidad'];
$nombre = $_POST['nombre'];

$f = fopen("data/unidades.csv", "a");
fwrite($f, $codigo . ", " . $nombre . "\n");
fclose($f);

header('Location: index.php?route=unidades');