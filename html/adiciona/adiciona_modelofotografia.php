<?php

require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../ModeloFotografia.php');

$modelo_fotografia = new ModeloFotografia([
    'idmodelo' => $_POST["modelo"],
    'idfotografia' => $_POST["fotografia"],
]);

$modelo_fotografia->save();

header('Location: ../forms/form_modelofotografia.php');