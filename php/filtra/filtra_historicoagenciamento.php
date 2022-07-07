<?php 
require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once('../../HistoricoAgenciamento.php'); 
require_once('../../Agente.php'); 
require_once('../../Modelo.php'); 

$historico_agenciamento = HistoricoAgenciamento::search([$_POST['campo']],['like'],['%'.$_POST['valor'].'%']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Agenciamento</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style_menu.css">

</head>

<body>
<div class="container">
    <h3>Histórico de Agenciamento</h3>
    <div class="card">
        <table class="table table-striped" style:"background-color:white">
            <thead>
                <tr>
                    <th style="padding: 5px">Modelo</th>
                    <th style="padding: 5px">Novo Agente</th>
                    <th style="padding: 5px">Data de Início</th>
                    <th style="padding: 5px">Data de Fim</th>
                    <th style="padding: 5px">Motivo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($historico_agenciamento as $ha) {?>
                <tr>
                    <td><?php 
                        $modelo = Modelo::search(['idmodelo'],['like'],[$ha->getIdmodelo()]);
                        foreach ($modelo as $m) {
                            echo $m->getNome();
                        }
                    ?></td>
                    <td><?php 
                        $agente = Agente::search(['idagente'],['like'],[$ha->getIdagente()]);
                        foreach ($agente as $a) {
                            echo $a->getNome();
                        }
                    ?></td>
                    <td><?php echo $ha->getDatainicio() ?></td>
                    <td><?php echo $ha->getDatafim() ?></td>
                    <td><?php echo $ha->getMotivo() ?></td>
                <?php }
                ?>
                </tr>
            </tbody>
        </table>
        <form action="../../php/filtra/filtra_historicoagenciamento.php" method="post">
            <label for="campo">Filtrar por: </label>
            <select name="campo" id="campo">
            <!-- Query to get columns from table -->
            <?php
            $sql = "SHOW COLUMNS FROM historicoagenciamento";
            $conn = MyConnect::getInstance();
            $result = $conn->query($sql);
            
            if ($result->rowCount() > 0){
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {            
                    echo "<option value='" . $row["Field"] . "'>" . $row["Field"] . "</option>" ;
                }
            }
            ?>
            </select>
            <input type="text" name="valor" id="valor">
            <input type="submit" value="Pesquisar">
        </form>
        <a href="../../html/index.html" style="color: black"><button class="btn-menu">Menu</button></a>
    </div>
</div>
</body>
</html>