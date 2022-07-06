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
    <title>Adicionar Fotografia ao Portefolio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <a href="../index.html" style="color: black"><button class="btn-menu">Menu</button></a>
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Adicionar Fotografia ao Portefolio</h3>
                <div class="card">
                    <h5 class="text-center mb-4">Adicionar Fotografia ao Portefolio</h5>
                    <form class="form-card"  method="post" action="../../php/adiciona/adiciona_fotografiaportefolio.php" >
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Fotografia<span class="text-danger"> *</span></label> <select name="fotografia" id="" placeholder="" onblur="validate(5)">
                                <?php
                                    $fotografia = Fotografia::search([],[],[]);
                                    foreach ($fotografia as $f) {?>
                                        <option value="<?php echo $f->getIdfotografia(); ?>"><?php echo $f->getNome(); ?></option>
                                    <?php }
                                ?>
                            </select> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Portefolio<span class="text-danger"> *</span></label> <select name="portefolio" id="" placeholder="" onblur="validate(5)">
                                <?php
                                    $portefolio = Portefolio::search([],[],[]);
                                    foreach ($portefolio as $p) {?>
                                        <option value="<?php echo $p->getIdportefolio(); ?>"><?php echo $p->getIdportefolio(); ?></option>
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