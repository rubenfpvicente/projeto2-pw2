<?php

require_once ('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../Agente.php');

$agente = Agente::search([],[],[]);

foreach ($agente as $a){
    if($a->getIdagente() == $_GET['id']){
        $a->delete($a->getIdagente());
    };
};

header('Location: ../../html/listas/lista_agente.php');