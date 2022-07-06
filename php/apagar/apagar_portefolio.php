<?php

require_once ('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../Portefolio.php');

$portefolio = Portefolio::search([],[],[]);

foreach ($portefolio as $p){
    if($p->getIdportefolio() == $_GET['id']){
        $p->delete($p->getIdportefolio());
    }
}


header('Location: ../../html/listas/lista_portefolio.php');