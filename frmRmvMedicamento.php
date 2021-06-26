<?php 
    include 'navbar.php'; 
    $idMedicamento =trim($_GET['idMedicamento']);

    //recuperar os dados no banco de dados
    include 'conexao.php';
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM medicamentos WHERE idMedicamento=?;"; 
    $query = $pdo->prepare($sql);
    $query->execute(array($idMedicamento));
    $medicamentos = $query->fetch(PDO::FETCH_ASSOC);
    $nomeMedicamento = $medicamentos['nomeMedicamento'];
    $qntdMedicamento = $medicamentos['qntdMedicamento'];
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

    <title>Remoção de Médicamento</title>
</head>
<body>
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Remover Medicamento</h3>
        </div>
    <form action="rmvMedicamento.php" method="POST" id='frmRmvMedicamento' class="col s12">    
        <div class="row">
             <div class="col s10">
                 <label for ="lblId"><h4><blockquote>ID:  <?php echo $idMedicamento?></blockquote></h4></label>
                 <input type="hidden" id="idMedicamento" name="idMedicamento" value="<?php echo $idMedicamento;?>">
                 <label for ="lblNome"><H4>NOME: <?php echo $medicamentos['nomeMedicamento'];?></H4></label>
                 <label for ="lblQntd"><H4>QUANTIDADE: <?php echo $medicamentos['qntdMedicamento'];?></H4></label>
                 <label for ="lblDesc"><H4>DESCRIÇÃO: <?php echo $medicamentos['descMedicamento'];?></H4></label>
             </div>
        </div>
            <div class="input-field col s8">
               <button class="btn waves-effect waves-light red" type="submit" name="btnRemover">
               Remover <i class="material-icons">delete</i> 
               </button>

              <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar"
                onclick="JavaScript:location.href='listaMedicamentos.php'">
               Voltar <i class="material-icons">arrow_back</i> 
               </button>
            </div>
            <br/>
     </form>
</body>
</html>
