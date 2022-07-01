<?php

require_once('WithDatabaseable.php');
require_once('Databaseable.php');
require_once('MyConnect.php');
require_once ('Fotografo.php');

$fotografo = new Fotografo([
    'nome' => $_POST["nome"],
    'rua' => $_POST["rua"],
    'porta' => $_POST["porta"],
    'codigopostal' => $_POST["codigopostal"],
    'cidade' => $_POST["cidade"],
    'pais' => $_POST["pais"],
    'contacto' => $_POST["contacto"],
    'nif' => $_POST["nif"]
]);

$fotografo->save();

header('Location: form_fotografo.php');

