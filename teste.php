<?php

require_once('WithDatabaseable.php');
require_once('MyConnect.php');
require_once('Databaseable.php');
require_once('Portefolio.php');
require_once('Fotografo.php');
require_once('Agente.php');

// $fotografo = new Fotografo(['nome' => 'jose', 'rua' => 'a rua', 'nif' => '1234']);
// //var_dump($fotografo);
// //exit;

$portefolio = new Portefolio (['dataInicio' => '01/01/2020', 'dataFim' => '01/01/2021']);

if($portefolio->save()) {
    echo 'Portefolio saved ';
} else {
    echo 'Error: Portefolio not saved';
}
// if ($fotografo->save()) {
//     echo "Fotografo gravado com id: " . $fotografo->getId() . "\n";
// } else {
//     echo "Ocorreu um erro a gravar o fotografo\n";
// }

// $agente = new Agente(['nome' => 'Marcelo']);
// if ($agente->save()) {
//     echo "Agente gravado com id: " . $agente->getId() . "\n";
// } else {
//     echo "Ocorreu um erro a gravar o agente\n";
// }

// $resultados =$fotografo->search(['nome', 'nif'], ['!=', 'like'], ['antonio', '%9%']);
// //print_r($resultados);

// $resultados_agente = $agente->search([], [], []);
//print_r($resultados);
