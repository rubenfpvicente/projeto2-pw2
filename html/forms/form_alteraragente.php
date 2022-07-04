<?php 
require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once('../../Modelo.php'); 
require_once('../../Agente.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Alterar Agente</h3>
                <div class="card">
                    <h5 class="text-center mb-4">Alterar Agente</h5>
                    <form class="form-card"  method="post" action="../adiciona/altera_agente.php" >
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Modelo<span class="text-danger"> *</span></label> <select name="modelo" id="" placeholder="" onblur="validate(5)">
                                <?php
                                    $modelo = Modelo::search([],[],[]);
                                    foreach ($modelo as $m) {?>
                                        <option value="<?php echo $m->getIdmodelo(); ?>"><?php echo $m->getNome(); ?></option>
                                    <?php }
                                ?>
                            </select> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Atual Agente<span class="text-danger"> *</span></label>
                         </div>
                        </div>
                        <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Novo Agente<span class="text-danger"> *</span></label> <select name="agente" id="" placeholder="" onblur="validate(5)">
                                <?php
                                    $agente = Agente::search([],[],[]);
                                    foreach ($agente as $a) {?>
                                        <option value="<?php echo $a->getIdagente(); ?>"><?php echo $a->getNome(); ?></option>
                                    <?php }
                                ?>
                            </select> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Motivo<span class="text-danger"> *</span></label> <input type="text" id="" name="motivo" placeholder="" onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Data de Início (Atual Agente)<span class="text-danger"> *</span></label> <input type="date" id="" name="data_inicio" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" name="agente" class="btn-block btn-primary">Alterar</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>