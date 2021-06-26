<?php //frmEdtMedico.php
    include 'navbar.php'; 
    include 'conexao.php'; 
    //recuperar o id pelo método GET
    $idMedicamento =$_GET['idMedicamento']; 

    //recuperar os dados no banco de dados
     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM medicamentos WHERE idMedicamento=?;"; 
     $query = $pdo->prepare($sql);
     $query->execute(array($idMedicamento));

     $medicamentos = $query->fetch(PDO::FETCH_ASSOC);

     //atribui dados em variáveis 
    $nomeMedicamento = $medicamentos['nomeMedicamento'];
    $qtdMedicamento = $medicamentos['qntdMedicamento'];
    $descMedicamento = $medicamentos['descMedicamento'];
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

    <title>Editar Medicamento</title>
</head>
<body style ="background-color:#333333">
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Alterar Dados Do Medicamento</h3>
        </div>
     <div class="row">
        <form action="edtMedicamento.php" method="POST" id="frmEdtMedico" class="col s12">
            
            <div class="input-field col s8">
              <h3>
                <label for="lblIdMedicamento">
                         <b>ID: </b> <?php echo $idMedicamento;?>
                </label> 
                <input type="hidden" id="idMedicamento" name="idMedicamento" value="<?php echo $idMedicamento;?>">
              </h3>
            </div>
           
            <br>
            <div class="input-field col s8">
                <label for="lblNome">Informe o Nome do Medicamento</label>
                <input type="text" class="form-control" id="nomeMedicamento" name="nomeMedicamento"
                value="<?php echo $nomeMedicamento?>">
            </div>
            <div class="input-field col s5">
                <label for="lblQntd">Informe a Quantidade Do Medicamento: </label>
                <input type="text" class="form-control" id="qntdMedicamento" name="qntdMedicamento"
                value="<?php echo $qtdMedicamento?>">
            </div>
            <div class="input-field col s5">
                <label for="lblDesc">Informe a Descrição do Medicamento: </label>
                <input type="text" class="form-control" id="descMedicamento" name="descMedicamento"
                value="<?php echo $descMedicamento?>">
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