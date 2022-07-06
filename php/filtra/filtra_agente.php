<?php 
require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once('../../Agente.php'); 

$agente = Agente::search([$_POST['campo']],['like'],['%'.$_POST['valor'].'%']);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agentes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style_menu.css">
</head>
<body>
<div class="container">
    <h3>Agentes</h3>
    <div class="card">
        <table class="table table-striped" style:"background-color:white">
            <thead>
                <tr>
                    <th style="padding: 5px">ID</th>
                    <th style="padding: 5px">Nome</th>
                    <th style="padding: 5px">Morada</th>
                    <th style="padding: 5px">Localidade</th>
                    <th style="padding: 5px">País</th>
                    <th style="padding: 5px">Contacto</th>
                    <th style="padding: 5px">NIF</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($agente as $a) {?>
                <tr>
                    <td><?php echo $a->getIdagente() ?></td>
                    <td><?php echo $a->getNome() ?></td>
                    <td><?php echo $a->getRua() . " nº " . $a->getPorta() ?></td>
                    <td><?php echo $a->getCodigoPostal() . " " . $a->getCidade()  ?></td>
                    <td><?php echo $a->getPais() ?></td>
                    <td><?php echo $a->getContacto() ?></td>
                    <td><?php echo $a->getNif() ?></td>
                    <td><button><a href="../../php/apagar/apagar_agente.php?id=<?php echo $a->getIdagente() ?>" style="color: black">Apagar</a></button></td>
                <?php }
                ?>
                </tr>
            </tbody>
        </table>
        <form action="./filtra_agente.php" method="post">
            <label for="campo">Filtrar por: </label>
            <select name="campo" id="campo">
            <!-- Query to get columns from table -->
            <?php
            $sql = "SHOW COLUMNS FROM agente";
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
        <a href="../index.html" style="color: black"><button class="btn-menu">Menu</button></a>
    </div>
</div>
</body>
</html>