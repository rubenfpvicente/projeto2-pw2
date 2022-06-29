<?php 
require_once('WithDatabaseable.php');
require_once('MyConnect.php');
require_once('Databaseable.php');
require_once('Agente.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adicionar Modelo</h1>

    <form action="adiciona_modelo.php">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id=""><br>

        <label for="agente">Agente: </label>
        <select name="agente" id="">
            <option value="">Sem Agente</option>
            <?php
                $agente = Agente::search([],[],[]);
                foreach ($agente as $a) {?>
                    <option value="<?php echo $a->getId(); ?>"><?php echo $a->getNome(); ?></option>
                <?php }
            ?>
        </select>

        <br><br>
        <input type="submit" value="Adicionar">
    </form>
    
</body>
</html>