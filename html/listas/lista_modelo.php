<?php 
require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once('../../Agente.php'); 
require_once('../../Modelo.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style_menu.css">

</head>

<body>
<div class="container">
    <h3>Modelos</h3>
    <div class="card">
        <table class="table table-striped" style:"background-color:white">
            <thead>
                <tr>
                    <th style="padding: 5px">ID</th>
                    <th style="padding: 5px">Sexo</th>
                    <th style="padding: 5px">Nome</th>
                    <th style="padding: 5px">Medida1</th>
                    <th style="padding: 5px">Medida2</th>
                    <th style="padding: 5px">Medida3</th>
                    <th style="padding: 5px">Morada</th>
                    <th style="padding: 5px">Localidade</th>
                    <th style="padding: 5px">País</th>
                    <th style="padding: 5px">Contacto</th>
                    <th style="padding: 5px">NIF</th>
                    <th style="padding: 5px">Altura</th>
                    <th style="padding: 5px">Agente</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $modelo = Modelo::search([],[],[]);
                foreach ($modelo as $m) {?>
                <tr>
                    <td><?php echo $m->getIdmodelo() ?></td>
                    <td><?php echo $m->getSexo() ?></td>
                    <td><?php echo $m->getNome() ?></td>
                    <td><?php echo $m->getMedida1() ?></td>
                    <td><?php echo $m->getMedida2() ?></td>
                    <td><?php echo $m->getMedida3() ?></td>
                    <td><?php echo $m->getRua() . " nº " . $m->getPorta() ?></td>
                    <td><?php echo $m->getCodigoPostal() . " " . $m->getCidade()  ?></td>
                    <td><?php echo $m->getPais() ?></td>
                    <td><?php echo $m->getContacto() ?></td>
                    <td><?php echo $m->getNif() ?></td>
                    <td><?php echo $m->getAltura() ?></td>
                    <td><?php 
                        $agente = Agente::search(['idagente'],['like'],[$m->getIdagente()]);
                        foreach ($agente as $a) {
                            echo $a->getNome();
                        }
                    ?></td>
                    <td><button><a href="../../php/apagar/apagar_modelo.php?id=<?php echo $m->getIdmodelo() ?>" style="color: black">Apagar</a></button></td>
                <?php }
                ?>
                </tr>
            </tbody>
        </table>
        <form action="../../php/filtra/filtra_modelo.php" method="post">
            <label for="campo">Filtrar por: </label>
            <select name="campo" id="campo">
            <!-- Query to get columns from table -->
            <?php
            $sql = "SHOW COLUMNS FROM modelo";
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