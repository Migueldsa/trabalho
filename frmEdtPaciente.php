<?php //frmEdtPaciente.php
    include 'navbar.php'; 
    include 'conexao.php'; 
    //recuperar o id pelo método GET
    $idPaciente =$_GET['idPaciente']; 

    //recuperar os dados no banco de dados
     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM pacientes WHERE idPaciente=?;"; 
     $query = $pdo->prepare($sql);
     $query->execute(array($idPaciente));

     $pacientes = $query->fetch(PDO::FETCH_ASSOC);

     //atribui dados em variáveis
     $nomePaciente = $pacientes['nomePaciente'];
     $idadePaciente = $pacientes['idadePaciente'];
     $sintomaPaciente = $pacientes['sintomasPaciente'];
     $enderecoPaciente= $pacientes['enderecoPaciente'];
     $telefonePaciente= $pacientes['telefonePaciente']; 
    Conexao::desconectar(); 
?>

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

    <title>Editar Paciente</title>
</head>
<body style ="background-color:#333333">
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Alterar Dados do Paciente</h3>
        </div>
     <div class="row">
        <form action="edtPaciente.php" method="POST" id="frmEdtPaciente" class="col s12">
            
            <div class="input-field col s8">
              <h3>
                <label for="lblIdPaciente">
                         <b>ID: </b> <?php echo $idPaciente;?>
                </label> 
                <input type="hidden" id="idPaciente" name="idPaciente" value="<?php echo $idPaciente;?>">
              </h3>
            </div>
           
            <br>
            <div class="input-field col s8">
                <label for="lblNome">Informe o Nome do Paciente</label>
                <input type="text" class="form-control" id="nomePaciente" name="nomePaciente"
                value="<?php echo $nomePaciente?>">
            </div>
            <div class="input-field col s5">
                <label for="lblIdade">Informe a Idade do Paciente: </label>
                <input type="text" class="form-control" id="idadePaciente" name="idadePaciente"
                value="<?php echo $idadePaciente?>">
            </div>
            <div class="input-field col s5">
                <label for="lblSintomas">Informe os Sintomas Do Paciente: </label>
                <input type="text" class="form-control" id="sintomasPaciente" name="sintomasPaciente"
                value="<?php echo $sintomaPaciente?>">
            </div>      
            <div class="input-field col s5">
                <label for="lblEndereco">Informe Endereço Do Paciente: </label>
                <input type="text"  class="form-control" id="enderecoPaciente" name="enderecoPaciente"
                value="<?php echo $enderecoPaciente?>">
            </div>
            <div class="input-field col s5">
                <label for="lblTelefone">Informe o Telefone Do Paciente: </label>
                <input type="text" class="form-control" id="telefonePaciente" name="telefonePaciente"
                value="<?php echo $telefonePaciente?>">
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
                onclick="JavaScript:location.href='listaPacientes.php'">
               Voltar <i class="material-icons">arrow_back</i> 
               </button>
            </div>

        </form>   
     </div>
    </div>
</body>
</html>