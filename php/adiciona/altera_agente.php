<?php

require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../HistoricoAgenciamento.php');
require_once ('../../Modelo.php');


$historico_agenciamento = new HistoricoAgenciamento(
    [
        'idagente' => $_POST["novo_agente"],
        'idmodelo' => $_POST["modelo"],
        'datainicio' => $_POST["data_inicio"] == '' ? null : $_POST["data_inicio"],
        'datafim' => date("Y-m-d"),
        'motivo' => $_POST["motivo"]
    ]
);

$historico_agenciamento->save();

$modelo = Modelo::search(['idmodelo'],['like'],[$_POST['modelo']]);

$modelo[0]->setIdagente($_POST['novo_agente']);

$modelo[0]->update();
header('Location: ../../html/forms/form_alteraragente.php');
