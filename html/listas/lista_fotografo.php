<?php 
require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once('../../Fotografo.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotógrafos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style_menu.css">

</head>

<body>
<div class="container">
    <h3>Fotógrafos</h3>
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
                $fotografo = Fotografo::search([],[],[]);
                foreach ($fotografo as $f) {?>
                <tr>
                    <td><?php echo $f->getIdfotografo() ?></td>
                    <td><?php echo $f->getNome() ?></td>
                    <td><?php echo $f->getRua() . " nº " . $f->getPorta() ?></td>
                    <td><?php echo $f->getCodigoPostal() . " " . $f->getCidade()  ?></td>
                    <td><?php echo $f->getPais() ?></td>
                    <td><?php echo $f->getContacto() ?></td>
                    <td><?php echo $f->getNif() ?></td>
                    <td><button><a href="../../php/apagar/apagar_fotografo.php?id=<?php echo $f->getIdfotografo() ?>" style="color: black">Apagar</a></button></td>
                <?php }
                ?>
                </tr>
            </tbody>
        </table>
        <form action="../../php/filtra/filtra_fotografo.php" method="post">
            <label for="campo">Filtrar por: </label>
            <select name="campo" id="campo">
            <!-- Query to get columns from table -->
            <?php
            $sql = "SHOW COLUMNS FROM fotografo";
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