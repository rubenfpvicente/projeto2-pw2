<?php

require_once('WithDatabaseable.php');
require_once('Databaseable.php');
require_once('MyConnect.php');
require_once ('Portefolio.php');

$portefolio = new Portefolio([
    'dataInicio' => $_POST["data_inicio"] == '' ? null : $_POST["data_inicio"],
    'dataFim' => $_POST["data_fim"] == '' ? null : $_POST["data_fim"],
]);