<?php

require_once ('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../Fotografo.php');

$fotografo = Fotografo::search([],[],[]);

foreach ($fotografo as $f){
    if($f->getIdfotografo() == $_GET['id']){
        $f->delete($f->getIdfotografo());
    }
}


header('Location: ../../html/listas/lista_fotografo.php');