
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style_geral.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="validacaoCPF.js"></script>

    <title>Sistema Hospitalar </title>
</head>

<body style ="background-color:#333333">
   <!-- menu suspenso -->
  <nav class="black">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right"><img src="imagens/logo.png" width="60"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="listaPacientes.php">Pacientes</a></li>
        <li><a href="listaMedicos.php">Médicos</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>

  <!-- menu lateral -->
  <ul id="slide-out" class="sidenav">
    <!-- <div class="teal lighten-5"> -->
    <li><div class="user-view">
      <div class="background">
        <img src="imagens/empresa2.jpeg">
      </div>
      <a href="#user"><img class="circle" src="imagens/perfil.jpg"></a>
      <a href="#name"><span class="yellow-text name">Miguel</span></a>
      <a href="#email"><span class="yellow-text email">jorguindogueto@yahoo.com.br</span></a>
    </div></li>
    <li><a href="listarCompetidor.php"><i class="material-icons">person</i>Competidores</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <!-- </div> -->
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        
</body>
</html>

<script type="text/javascript"> 

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

</script>