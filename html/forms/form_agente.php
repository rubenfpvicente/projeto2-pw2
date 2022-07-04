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
                <h3>Agentes</h3>
                <div class="card">
                    <h5 class="text-center mb-4">Adicionar Agente</h5>
                    <form class="form-card"  method="post" action="../adiciona/adiciona_agente.php" >
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nome<span class="text-danger"> *</span></label> <input type="text" name="nome" placeholder="" onblur="validate(1)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">NIF<span class="text-danger"> *</span></label> <input type="text" id="nif" name="nif" placeholder="" onblur="validate(2)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Morada<span class="text-danger"> *</span></label> <input type="text" id="rua" name="rua" placeholder="Rua" onblur="validate(3)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Número<span class="text-danger"> *</span></label> <input type="number" id="porta" name="porta" placeholder="" onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Código Postal<span class="text-danger"> *</span></label> <input type="text" id="codigopostal" name="codigopostal" placeholder="Código Postal" onblur="validate(3)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Contacto<span class="text-danger"> *</span></label> <input type="text" id="contacto" name="contacto" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Cidade<span class="text-danger"> *</span></label> <input type="text" id="cidade" name="cidade" placeholder="" onblur="validate(5)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">País<span class="text-danger"> *</span></label> <input type="text" id="pais" name="pais" placeholder="" onblur="validate(5)"> </div>
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