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
    <title>Fotografia</title>
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
                <h3>Fotografias</h3>
                <div class="card">
                    <h5 class="text-center mb-4">Adicionar Fotografia</h5>
                    <form class="form-card"  method="post" action="../adiciona/adiciona_fotografia.php" >
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nome<span class="text-danger"> *</span></label> <input type="text" name="nome" placeholder="" onblur="validate(1)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Resolução<span class="text-danger"> *</span></label> <input type="text" id="resolucao" name="resolucao" placeholder="" onblur="validate(2)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Cores<span class="text-danger"> *</span></label> <input type="text" id="cores" name="cores" placeholder="" onblur="validate(3)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Tipo<span class="text-danger"> *</span></label> <input type="text" id="tipo" name="tipo" placeholder="" onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Localização<span class="text-danger"> *</span></label> <input type="text" id="localizacao" name="localizacao" placeholder="" onblur="validate(3)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Fotografo<span class="text-danger"> *</span></label> <select id="fotografo" name="fotografo" placeholder="" onblur="validate(5)">
                                <?php
                                    $fotografo = Fotografo::search([],[],[]);
                                    foreach ($fotografo as $f) {?>
                                        <option value="<?php echo $f->getIdfotografo(); ?>"><?php echo $f->getNome(); ?></option>
                                    <?php }
                                ?>
                            </select> </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" name="agente" class="btn-block btn-primary">Adicionar</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>