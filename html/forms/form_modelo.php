<?php 
require_once('../../WithDatabaseable.php');
require_once('../../MyConnect.php');
require_once('../../Databaseable.php');
require_once('../../Agente.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Modelos</h3>
                <div class="card">
                    <h5 class="text-center mb-4">Adicionar Modelo</h5>
                    <form class="form-card"  method="post" action="adiciona_modelo.php" >
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nome<span class="text-danger"> *</span></label> <input type="text" name="nome" placeholder="" onblur="validate(1)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">NIF<span class="text-danger"> *</span></label> <input type="text" id="nif" name="nif" placeholder="" onblur="validate(2)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Morada<span class="text-danger"> *</span></label> <input type="text" id="rua" name="rua" placeholder="Rua" onblur="validate(3)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Número<span class="text-danger"> *</span></label> <input type="text" id="porta" name="porta" placeholder="" onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Código Postal<span class="text-danger"> *</span></label> <input type="text" id="codigopostal" name="codigopostal" placeholder="Código Postal" onblur="validate(3)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Sexo<span class="text-danger"> *</span></label> <input type="text" id="sexo" name="sexo" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Cidade<span class="text-danger"> *</span></label> <input type="text" id="cidade" name="cidade" placeholder="" onblur="validate(5)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">País<span class="text-danger"> *</span></label> <input type="text" id="pais" name="pais" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Contacto<span class="text-danger"> *</span></label> <input type="text" id="contacto" name="contacto" placeholder="" onblur="validate(5)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nacionalidade<span class="text-danger"> *</span></label> <input type="text" id="nacionalidade" name="nacionalidade" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Altura<span class="text-danger"> *</span></label> <input type="text" id="text" name="altura" placeholder="" onblur="validate(5)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Medida 1 (Busto)<span class="text-danger"> *</span></label> <input type="number" id="medida1" name="medida1" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Medida 2 (Cintura)<span class="text-danger"> *</span></label> <input type="number" id="medida2" name="medida2" placeholder="" onblur="validate(5)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Medida 3 (Quadril)<span class="text-danger"> *</span></label> <input type="number" id="medida3" name="medida3" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Agente<span class="text-danger"> *</span></label> <select name="agente" id="" placeholder="" onblur="validate(5)">
                                <option value="">Sem Agente</option>
                                <?php
                                    $agente = Agente::search([],[],[]);
                                    foreach ($agente as $a) {?>
                                        <option value="<?php echo $a->getIdagente(); ?>"><?php echo $a->getNome(); ?></option>
                                    <?php }
                                ?>
                            </select> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <button type="submit" name="modelo" class="btn-block btn-primary">Adicionar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- <script src="js/test.js"></script> -->
</body>
</html>