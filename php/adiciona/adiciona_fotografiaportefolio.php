<?php

require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../FotografiaPortefolio.php');

$fotografia_portefolio = new FotografiaPortefolio ([
    'idfotografia' => $_POST["fotografia"],
    'idportefolio' => $_POST["portefolio"]
]);

$fotografia_portefolio->save();

header('Location: ../../html/forms/form_fotografiaportefolio.php');