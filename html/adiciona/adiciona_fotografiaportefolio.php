<?php

require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../FotografiaPortefolio.php');

$fotografia_portefolio = new FotografiaPortefolio ([
    'idFotografia' => $_POST["fotografia"],
    'idPortefolio' => $_POST["portefolio"]
]);

$fotografia_portefolio->save();

header('Location: ../forms/form_adiciona_fotografiaportefolio.php');