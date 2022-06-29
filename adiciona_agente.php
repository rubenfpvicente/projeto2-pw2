<?php

require_once('WithDatabaseable.php');
require_once('Databaseable.php');
require_once('MyConnect.php');
require_once ('Agente.php');

$agente = new Agente(['nome' => $_POST["nome"],'rua' => $_POST["rua"],'porta' => $_POST["porta"],'codigopostal' => $_POST["codigopostal"],'cidade' => $_POST["cidade"],'pais' => $_POST["pais"],'contacto' => $_POST["contacto"],'nif' => $_POST["nif"]]);

if($agente->save()){
    echo 'Agente saved with ' . $agente->getIdagente();
} else {
    echo 'Error: Agente not saved';
}

header('Location: form_agente.php');