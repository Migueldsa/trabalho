<?php 
    include 'menu.php'; 
    $idPaciente =trim($_GET['idPaciente']);

    //recuperar os dados no banco de dados
    include 'conexao.php';
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM pacientes WHERE idPaciente=?;"; 
    $query = $pdo->prepare($sql);
    $query->execute(array($idPaciente));
    $pacientes = $query->fetch(PDO::FETCH_ASSOC);
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

    <title>Remoção de Paciente</title>
</head>
<body>
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Remover Paciente</h3>
        </div>
    <form action="rmvPaciente.php" method="POST" id='frmRmvPaciente' class="col s12">    
        <div class="row">
             <div class="col s10">
                 <label for ="lblId"><h4><blockquote>ID:  <?php echo $idPaciente?></blockquote></h4></label>
                 <input type="hidden" id="idPaciente" name="idPaciente" value="<?php echo $idPaciente;?>">
                 <label for ="lblNome"><H4>NOME: <?php echo $pacientes['nomePaciente'];?></H4></label>
                 <label for ="lblIdade"><H4>IDADE: <?php echo $pacientes['idadePaciente'];?></H4></label>
                 <label for ="lblSintomas"><H4>SINTOMAS: <?php echo $pacientes['sintomasPaciente'];?></H4></label>
                 <label for ="lblEndereco"><H4>ENDEREÇO: <?php echo $pacientes['enderecoPaciente'];?></H4></label>
                 <label for ="lblTelefone"><H4>NOTA: <?php echo $pacientes['telefonePaciente'];?></H4></label>
             </div>
        </div>
            <div class="input-field col s8">
               <button class="btn waves-effect waves-light red" type="submit" name="btnRemover">
               Remover <i class="material-icons">delete</i> 
               </button>

              <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar"
                onclick="JavaScript:location.href='listaPacientes.php'">
               Voltar <i class="material-icons">arrow_back</i> 
               </button>
            </div>
            <br/>
     </form>
</body>
</html>
