<?php 
require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once('../../Portefolio.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portefólios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">
    <h3>Portefólios</h3>
    <div class="card">
        <table class="table table-striped" style:"background-color:white">
            <thead>
                <tr>
                    <th style="padding: 5px">ID</th>
                    <th style="padding: 5px">Data de Início</th>
                    <th style="padding: 5px">Data de Fim</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $portefolio = Portefolio::search([],[],[]);
                foreach ($portefolio as $p) {?>
                <tr>
                    <td><?php echo $p->getIdportefolio() ?></td>
                    <td><?php echo $p->getDataInicio() ?></td>
                    <td><?php echo $p->getDataFim() ?></td>
                <?php }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>