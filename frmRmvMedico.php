<?php 
    include 'navbar.php'; 
    $idMedico =trim($_GET['idMedico']);

    //recuperar os dados no banco de dados
    include 'conexao.php';
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM medicos WHERE idMedico=?;"; 
    $query = $pdo->prepare($sql);
    $query->execute(array($idMedico));
    $medicos = $query->fetch(PDO::FETCH_ASSOC);
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

    <title>Remoção de Médico</title>
</head>
<body>
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Remover Medico</h3>
        </div>
    <form action="rmvMedico.php" method="POST" id='frmRmvMedico' class="col s12">    
        <div class="row">
             <div class="col s10">
                 <label for ="lblId"><h4><blockquote>ID:  <?php echo $idMedico?></blockquote></h4></label>
                 <input type="hidden" id="idMedico" name="idMedico" value="<?php echo $idMedico;?>">
                 <label for ="lblNome"><H4>NOME: <?php echo $medicos['nomeMedico'];?></H4></label>
                 <label for ="lblArea"><H4>AREA: <?php echo $medicos['areaMedico'];?></H4></label>
                 <label for ="lblEscala"><H4>ESCALA: <?php echo $medicos['escalaMedico'];?></H4></label>
                 <label for ="lblEmail"><H4>EMAIL: <?php echo $medicos['emailMedico'];?></H4></label>
                 <label for ="lblCrm"><H4>CRM: <?php echo $medicos['crmMedico'];?></H4></label>
             </div>
        </div>
            <div class="input-field col s8">
               <button class="btn waves-effect waves-light red" type="submit" name="btnRemover">
               Remover <i class="material-icons">delete</i> 
               </button>

              <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar"
                onclick="JavaScript:location.href='listaMedicos.php'">
               Voltar <i class="material-icons">arrow_back</i> 
               </button>
            </div>
            <br/>
     </form>
</body>
</html>
