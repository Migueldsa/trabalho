<?php //listapacientes.php
    include 'conexao.php';
    include 'navbar.php';
     $pdo =  Conexao::conectar();
     $sql = "select * from medicos ";
     $listaMedicos = $pdo->query($sql);
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
    <title>Escala Médica</title>
</head>
<body style ="background-color:#333333">
<div class="container">
   <div class="row">
        <div class="col s12">
        <h3 class=" white-text text-dark-3" class="text-orange">
        <div class="medicos"><img class="img_icon" src="imagens/doctor.png" height="100px" width="100px"></div>
        LISTA DOS  MEDICOS
        </h3>
        <a class="btn-floating btn-large waves-effect waves-light green"
               onclick="JavaScript:location.href='frmInsMedicos.php'"><i class="material-icons">add</i></a>
               

        <div class="row">
            <div class="input-field">
                <form action="listaMedicos.php" method="GET" id="frmBuscaMedicos" class="col s12" >
                    <div class="input-field col s12">
                    
                        <label for="lblNome" class="red-text text-dark-4">Informe o nome do Médico: </label>
                        <input type="text" placeholder="informe o nome do Médico "
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
            <th>Área De Atuação</th>
            <th>Escala</th>
            <th>Email</th>
            <th>CRM</th>
            <th>EDT</th>
            <th>RMV</th>
        </tr>
        <?php
            foreach ($listaMedicos as $medicos){
        ?>
        <tr>
                <td><?php echo $medicos ['idMedico'];?></td> 
                <td><?php echo $medicos ['nomeMedico'];?></td>
                <td><?php echo $medicos ['areaMedico'];?></td>
                <td><?php echo $medicos ['escalaMedico'];?></td> 
                <td><?php echo $medicos ['emailMedico'];?></td>
                <td><?php echo $medicos ['crmMedico'];?></td>  
                <td> <a class="btn-floating btn-small waves-effect waves-light green"
                          onclick="JavaScript:location.href='frmEdtMedico.php?idMedico=' +
                          <?php echo $medicos['idMedico'];?>" >
                           <i class="material-icons">edit</i>
                    </td>
                    <td> <a class="btn-floating btn-small waves-effect waves-light red"
                          onclick="JavaScript:location.href='frmRmvMedico.php?idMedico=' +
                          <?php echo $medicos['idMedico'];?>" >
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