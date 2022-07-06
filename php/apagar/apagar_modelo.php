<?php

require_once ('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../Modelo.php');

$modelo = Modelo::search([],[],[]);

foreach ($modelo as $m){
    if($m->getIdmodelo() == $_GET['id']){
        $m->delete($m->getIdmodelo());
    }
}


header('Location: ../../html/listas/lista_modelo.php');