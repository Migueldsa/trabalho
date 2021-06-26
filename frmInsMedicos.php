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
   
    <title>Adicionar Novo Médico</title>
</head>
<body style ="background-color:#333333">
    <div class="container grey lighten-4 col s12">
    <div class="brown lighten-4 col s12">
        <h3>Adicionar Novo Médico</h3>
    </div>
    <div class="row">
        <form action="insMedico.php" method="POST" id="frmInsMedico" class="col s12">
            <div class="input-field col s8">
            <i class="material-icons prefix">account_circle</i>
                <label for="lblNome">Informe o Nome do Médico</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome">
            </div>
            <div class="input-field col s5">
            <i class="material-icons prefix">face</i>
                <label for="lblarea">Informe a Área de Atuação: </label>
                <input type="text" class="form-control" id="txtArea" name="txtArea">
            </div>      
            <div class="input-field col s5">
            <i class="material-icons prefix">mode_edit</i>
                <label for="lblEscala">Informe os dias de Escala : </label>
                <input type="text" class="form-control" id="txtEscala" name="txtEscala">
            </div>
            <div class="input-field col s5">
            <i class="material-icons prefix">place</i>
                <label for="lblEmail">Informe o email: </label>
                <input type="text" class="form-control" id="txtEmail" name="txtEmail">
            </div>      
            <div class="input-field col s5">
            <i class="material-icons prefix">phone</i>
                <label for="lblCrm">Informe o CRM : </label>
                <input type="text"  class="form-control" id="txtCrm" name="txtCrm">
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
                onclick="JavaScript:location.href='listaMedicos.php'">
               Voltar <i class="material-icons">arrow_back</i> 
               </button>
            </div>

        </form>   
        </div>


    
    
    
    </div>

    
</body>
</html>