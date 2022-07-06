<?php

require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../Agente.php');

$agente = new Agente([
    'nome' => $_POST["nome"],
    'rua' => $_POST["rua"],
    'porta' => $_POST["porta"],
    'codigopostal' => $_POST["codigopostal"],
    'cidade' => $_POST["cidade"],
    'pais' => $_POST["pais"],
    'contacto' => $_POST["contacto"],
    'nif' => $_POST["nif"]
]);

$agente->save();

header('Location: ../../html/forms/form_agente.php');