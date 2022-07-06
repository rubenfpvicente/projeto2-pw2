<?php
require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once ('../../Fotografia.php');

$fotografia = new Fotografia([
    'nome' => $_POST["nome"],
    'resolucao' => $_POST["resolucao"],
    'cores' => $_POST["cores"],
    'tipo' => $_POST["tipo"],
    'localizacao' => $_POST["localizacao"],
    'idfotografo' => $_POST["fotografo"]
]);

$fotografia->save();

header('Location: ../../html/forms/form_fotografia.php');