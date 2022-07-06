<?php 
require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once('../../Fotografia.php'); 
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
    <link rel="stylesheet" href="../css/style_menu.css">

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
                    <th style="padding: 5px">Fotografias</th>
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
                    <td>
                        <?php
                        $sql = "SELECT F.idfotografia FROM fotografia F, portefolio P, fotografiaportefolio FP WHERE F.idfotografia = FP.idfotografia AND P.idportefolio = FP.idportefolio AND P.idportefolio = " . $p->getIdportefolio() . ";";
                        $conn = MyConnect::getInstance();
                        $result = $conn->query($sql);

                        if ($result->rowCount() > 0){
                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                $id_fotografia = $row['idfotografia'];
                                $fotografia = Fotografia::search([],[],[]);
                                foreach ($fotografia as $f) {
                                    if($f->getIdfotografia() == $id_fotografia){
                                        echo $f->getNome() . "<br>";
                                    }          
                                }
                            }
                        }
                        ?>
                    </td>
                    <td><button><a href="../../php/apagar/apagar_portefolio.php?id=<?php echo $p->getIdportefolio() ?>" style="color: black">Apagar</a></button></td>
                <?php }
                ?>
                </tr>
            </tbody>
        </table>
        <form action="../../php/filtra/filtra_portefolio.php" method="post">
            <label for="campo">Filtrar por: </label>
            <select name="campo" id="campo">
            <!-- Query to get columns from table -->
            <?php
            $sql = "SHOW COLUMNS FROM portefolio";
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