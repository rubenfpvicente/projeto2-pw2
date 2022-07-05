<?php

require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../Modelo.php');

$modelo = new Modelo([
    'sexo' => $_POST["sexo"],
    'nome' => $_POST["nome"],
    'medida1' => $_POST["medida1"],
    'medida2' => $_POST["medida2"],
    'medida3' => $_POST["medida3"],
    'rua' => $_POST["rua"],
    'porta' => $_POST["porta"],
    'codigopostal' => $_POST["codigopostal"],
    'cidade' => $_POST["cidade"],
    'pais' => $_POST["pais"],
    'contacto' => $_POST["contacto"],
    'nif' => $_POST["nif"],
    'nacionalidade' => $_POST["nacionalidade"],
    'altura' => $_POST["altura"],
    'idagente' => $_POST["agente"] == '' ? null : $_POST["agente"],
]);

$modelo->save();

header('Location: ../forms/form_modelo.php'); 