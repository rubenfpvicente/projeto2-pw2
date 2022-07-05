<?php

require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../HistoricoAgenciamento.php');
require_once ('../../Modelo.php');


// $historico_agenciamento = new HistoricoAgenciamento(
//     [
//         'idagente' => $_POST["agente"],
//         'idmodelo' => $_POST["modelo"],
//         'dataInicio' => $_POST["data_inicio"] == '' ? null : $_POST["data_inicio"],
//         'dataFim' => date("Y-m-d") == '' ? null : date("Y-m-d"),
//         'motivo' => $_POST["motivo"]
//     ]
// );

// $historico_agenciamento->save();

$id_modelo = $_POST["modelo"];
$modelo = Modelo::search([],[],[]);


$modelo[$id_modelo]->setIdagente($_POST['novo_agente']);

$modelo[$id_modelo]->update();
header('Location: ../forms/form_alteraragente.php');
