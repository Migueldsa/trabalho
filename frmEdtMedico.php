<?php //frmEdtMedico.php
    include 'navbar.php'; 
    include 'conexao.php'; 
    //recuperar o id pelo método GET
    $idMedico =$_GET['idMedico']; 

    //recuperar os dados no banco de dados
     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM medicos WHERE idMedico=?;"; 
     $query = $pdo->prepare($sql);
     $query->execute(array($idMedico));

     $medicos = $query->fetch(PDO::FETCH_ASSOC);

     //atribui dados em variáveis 
    $nomeMedico = $medicos['nomeMedico'];
    $areaMedico = $medicos['areaMedico'];
    $escalaMedico = $medicos['escalaMedico'];
    $emailMedico = $medicos['emailMedico'];
    $crmMedico = $medicos['crmMedico'];
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

    <title>Editar Medico</title>
</head>
<body style ="background-color:#333333">
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Alterar Dados Do Medico</h3>
        </div>
     <div class="row">
        <form action="edtMedico.php" method="POST" id="frmEdtMedico" class="col s12">
            
            <div class="input-field col s8">
              <h3>
                <label for="lblIdMedico">
                         <b>ID: </b> <?php echo $idMedico;?>
                </label> 
                <input type="hidden" id="idMedico" name="idMedico" value="<?php echo $idMedico;?>">
              </h3>
            </div>
           
            <br>
            <div class="input-field col s8">
                <label for="lblNome">Informe o Nome do Medico</label>
                <input type="text" class="form-control" id="nomeMedico" name="nomeMedico"
                value="<?php echo $nomeMedico?>">
            </div>
            <div class="input-field col s5">
                <label for="lblArea">Informe a Area de atuação: </label>
                <input type="text" class="form-control" id="areaMedico" name="areaMedico"
                value="<?php echo $areaMedico?>">
            </div>
            <div class="input-field col s5">
                <label for="lblEscala">Informe a Escala do Médico: </label>
                <input type="text" class="form-control" id="escalaMedico" name="escalaMedico"
                value="<?php echo $escalaMedico?>">
            </div>      
            <div class="input-field col s5">
                <label for="lblEmail">Informe Email Do Medico: </label>
                <input type="text"  class="form-control" id="emailMedico" name="emailMedico"
                value="<?php echo $emailMedico?>">
            </div>
            <div class="input-field col s5">
                <label for="lblCrm">Informe o CRM Do Medico : </label>
                <input type="text" class="form-control" id="crmMedico" name="crmMedico"
                value="<?php echo $crmMedico?>">
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