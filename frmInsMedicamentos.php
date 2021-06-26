<?php  include 'navbar.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
    <title>Adicionar Novo Medicamento</title>
</head>
<body style ="background-color:#333333">
    <div class="container grey lighten-4 col s12">
    <div class="brown lighten-4 col s12">
        <h3>Adicionar Novo Medicamento</h3>
    </div>
    <div class="row">
        <form action="insMedicamento.php" method="POST" id="frmInsMedicamento" class="col s12">
            <div class="input-field col s8">
            <i class="material-icons prefix">account_circle</i>
                <label for="lblNome">Informe o Nome do Medicamento</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome">
            </div>
            <div class="input-field col s5">
            <i class="material-icons prefix">face</i>
                <label for="lblQntd">Informe a Quantidade em Estoque: </label>
                <input type="number" class="form-control" id="txtQntd" name="txtQntd">
            </div>      
            <div class="input-field col s5">
            <i class="material-icons prefix">mode_edit</i>
                <label for="lblDesc">Informe a descrição do Medicamento : </label>
                <input type="text" class="form-control" id="txtDesc" name="txtDesc">
            </div>

            <br>
            <div class="input-field col s8">
               <button class="btn waves-effect waves-light green" type="submit" name="btnGravar">
               Gravar <i class="material-icons">send</i> 
               </button>

               <button class="btn waves-effect waves-light orange" type="reset" name="btnLimpar">
               Limpar <i class="material-icons">brush</i> 
               </button>

               <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar"
                onclick="JavaScript:location.href='listaMedicamentos.php'">
               Voltar <i class="material-icons">arrow_back</i> 
               </button>
            </div>

        </form>   
        </div>


    
    
    
    </div>

    
</body>
</html>