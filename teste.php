<?php

require_once('WithDatabaseable.php');
require_once('MyConnect.php');
require_once('Databaseable.php');
require_once('Modelo.php');
require_once('Portefolio.php');
require_once('Fotografo.php');
require_once('Agente.php');

$fotografo = new Fotografo(['nome' => 'jose', 'morada' => 'a rua', 'nif' => '1234',]);
if ($fotografo->save()) {
    echo "Fotografo gravado com id: " . $fotografo->getIdfotografo() . "\n";
} else {
    echo "Ocorreu um erro a gravar o fotografo\n";
}

$resultados =$fotografo->search(['nome'], ['like'], ['jose']);
print_r($resultados);
// 