<?php //listapacientes.php
    include 'conexao.php';
     $pdo =  Conexao::conectar();
     $sql = "select * from pacientes ";
     $listaPacientes = $pdo->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Lista Pacientes</title>
</head>
<body>
<div class="container">
   <div class="row">
        <div class="col s12">
        <h3 class="orange lighten-2 white-text text-dark-3" class="text-orange">
          Lista pacientes
          <a class="btn-floating btn-large waves-effect waves-light green"
               onclick="JavaScript:location.href='frmInsCompetidor.php'"><i class="material-icons">add</i></a>
        </h3>

        <div class="row">
            <div class="input-field">
                <form action="listarCompetidor.php" method="GET" id="frmBuscaCompet" class="col s12" >
                    <div class="input-field col s12">
                        <label for="lblNome" class="red-text text-dark-4">Informe o nome do Paciente: </label>
                        <input type="text" placeholder="informe o nome do paciente "
                               class="form-control col s8" id="txtBusca" name="busca"> 
                        <button class="btn waves-effect waves-light col m1" type="submit" name="action">
                        <i class="material-icons right">search</i></button>
                    </div>
                </form>
            </div>
        </div>
             
        <table class="striped highlight  blue lighten-3 responsive-table">
            <tr class="light-blue darken-4  grey-text text-lighten-3">    
            <th>ID </th>
            <th>Nome</th>
            <th>Sintomas</th>
            <th>Endereço</th>
            <th>Telefone</th>
        </tr>
        <?php
            foreach ($listaPacientes as $pacientes){
        ?>
        <tr>
                <td><?php echo $pacientes ['idPaciente'];?></td> 
                <td><?php echo $pacientes ['nomePaciente'];?></td>
                <td><?php echo $pacientes ['sintomasPaciente'];?></td> 
                <td><?php echo $pacientes ['enderecoPaciente'];?></td> 
                <td><?php echo $pacientes ['telefonePaciente'];?></td> 

        </tr>
        <?php
            }
            ?>
        </table>
        </div>
   </div>
    
</body>
</html>