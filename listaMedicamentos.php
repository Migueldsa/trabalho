<?php //listapacientes.php
    include 'conexao.php';
    include 'navbar.php';
     $pdo =  Conexao::conectar();
     $sql = "select * from medicamentos ";
     $listaMedicamentos = $pdo->query($sql);
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
    <title>Lista Dos Medicamentos </title>
</head>
<body style ="background-color:#333333">
<div class="container">
   <div class="row">
        <div class="col s12">
        <h3 class=" white-text text-dark-3" class="text-orange">
          <div class="medicamentos"><img class="img_icon" src="imagens/medicine.png" height="100px" width="100px"></div>
          LISTA DOS  MEDICAMENTOS

        </h3>
        <a class="btn-floating btn-large waves-effect waves-light green"
               onclick="JavaScript:location.href='frmInsMedicamentos.php'"><i class="material-icons">add</i></a>
               

        <div class="row">
            <div class="input-field">
                <form action="listaMedicamentos.php" method="GET" id="frmBuscaMedicamentos" class="col s12" >
                    <div class="input-field col s12">
                    
                        <label for="lblNome" class="red-text text-dark-4">Informe o nome do Medicamento: </label>
                        <input type="text" placeholder="informe o nome do Medicamento "
                               class="form-control col s6" id="txtBusca" name="busca"> 
                        <button class="btn waves-effect waves-light col m1" type="submit" name="action">
                        <i class="material-icons right">search</i></button>
                    </div>
                </form>
            </div>
        </div>
             
        <table class="striped highlight   blue-grey lighten-3 responsive-table">
            <tr class="blue-grey darken-4  grey-text text-lighten-3">    
            <th>ID </th>
            <th>Nome</th>
            <th>Quantidade Em Estoque</th>
            <th>Descrição Do Medicamento</th>
            <th>EDT</th>
            <th>RMV</th>
        </tr>
        <?php
            foreach ($listaMedicamentos as $medicamentos){
        ?>
        <tr>
                <td><?php echo $medicamentos ['idMedicamento'];?></td> 
                <td><?php echo $medicamentos ['nomeMedicamento'];?></td>
                <td><?php echo $medicamentos ['qntdMedicamento'];?></td>
                <td><?php echo $medicamentos ['descMedicamento'];?></td>  
                <td> <a class="btn-floating btn-small waves-effect waves-light green"
                          onclick="JavaScript:location.href='frmEdtMedicamento.php?idMedicamento=' +
                          <?php echo $medicamentos['idMedicamento'];?>" >
                           <i class="material-icons">edit</i>
                    </td>
                    <td> <a class="btn-floating btn-small waves-effect waves-light red"
                          onclick="JavaScript:location.href='frmRmvMedicamento.php?idMedicamento=' +
                          <?php echo $medicamentos['idMedicamento'];?>" >
                           <i class="material-icons">delete</i>
                    </td>
        </tr>
        <?php
            }
            ?>
        </table>
        </div>
   </div>
    
</body>
</html>

