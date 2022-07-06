<?php

require_once ('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../Fotografia.php');

$fotografia = Fotografia::search([],[],[]);

foreach ($fotografia as $f){
    if($f->getIdfotografia() == $_GET['id']){
        $f->delete($f->getIdfotografia());
    }
}

header('Location: ../listas/lista_fotografia.php');