<?php

// si no proviene del formulario, redireccionar
if (sizeof($_POST) == 0) {
    header('Location: index.php?route=categorias');
}

$codigo = $_POST['id_unidad'];
$nombre = $_POST['nombre'];

$f = fopen("data/unidades.csv", "a");
fwrite($f,rand(1,10) . $codigo . ", " . $nombre . "\n");
fclose($f);

header('Location: index.php?route=categorias');