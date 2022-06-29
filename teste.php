<?php

require_once('WithDatabaseable.php');
require_once('MyConnect.php');
require_once('Databaseable.php');
require_once('Modelo.php');
require_once('Portefolio.php');
require_once('Fotografo.php');
require_once('Agente.php');

$portefolio = new Portefolio (['dataInicio' => '01/01/2020', 'dataFim' => '01/01/2021']);

if($portefolio->save()) {
    echo 'Portefolio saved ';
} else {
    echo 'Error: Portefolio not saved';
}

$agente = new Agente(['nome' => 'João', 'rua' => 'Rua da Fonte', 'porta' => '1', 'codigopostal' => '4444-444', 'cidade' => 'Porto', 'pais' => 'Portugal', 'contacto' => '912345678', 'nif' => '123456789']);

if($agente->save()) {
    echo 'Agente saved ';
} else {
    echo 'Error: Agente not saved';
}

$modelo = new Modelo(['nome' => 'Modelo 1', 'sexo' => 'M', 'medida1' => '1', 'medida2' => '2', 'medida3' => '3', 'rua' => 'Rua 1', 'porta' => '1', 'codigopostal' => '1', 'cidade' => 'Porto', 'pais' => 'Portugal', 'contacto' => '912345678', 'nif' => '123456789', 'altura' => '1', 'idagente' => $agente->getId()]);

if($modelo->save()) {
    echo 'Modelo saved ';
} else {
    echo 'Error: Modelo not saved';
}