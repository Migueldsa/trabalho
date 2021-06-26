
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Sistema Hospitalar </title>
</head>

<body style ="background-color:#333333">
   <!-- menu suspenso -->
  <nav class="black">
    <div class="nav-wrapper">
      <a href="menu.php" class="brand-logo right"><img src="imagens/logo.png" width="60"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="listaPacientes.php">Pacientes</a></li>
        <li><a href="listaMedicos.php">Médicos</a></li>
        <li><a href="listaMedicamentos.php">Medicamentos</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  

  <!-- menu lateral -->
  <ul id="slide-out" class="sidenav">
    <!-- <div class="teal lighten-5"> -->
    <li><div class="user-view">
      <div class="background">
        <img src="imagens/fundo.png">
      </div>
      <a href="#user"><img class="circle" src="imagens/doctor.png"></a>
      <a href="#name"><span class="white-text name">Miguel</span></a>
      <a href="#email"><span class="white-text email">jorguindogueto@yahoo.com.br</span></a>
    </div></li>
    <li><a href="listaPacientes.php"><i class="material-icons">people</i>ListaPacientes</a></li>
    <li><a href="listaPacientes.php"><i class="material-icons">person</i>Lista Médicos</a></li>
    <li><a href="listaPacientes.php"><i class="material-icons">storage</i>Lista Medicamentos</a></li>
    <li><div class="divider"></div></li>
    <!-- </div> -->
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  <div class="container blue-grey darken-4">
   <div class="row">
        <div class="col s12">
        <h3 class="teal darken-4 white-text text-dark-3 center" class="text-orange">
          Menu
        </h3>

        <div background ="black" class="row, center">
            <div class="input-field">
                <form action="listaMedicos.php" method="GET" id="frmBuscaMedicos" class="col s12" >
                    <div class="input-field col s12">
                   <h4> <div class="medicos" type="button" onclick="JavaScript:location.href='listaMedicos.php'"><img class="img_icon" src="imagens/doctor.png" height="100px" width="100px"></div>
                    MEDICOS
                    <div class="pacientes" type="button" onclick="JavaScript:location.href='listaPacientes.php'"><img class="img_icon" src="imagens/patient.png" height="100px" width="100px"></div>
                    PACIENTE
                    <div class="cirurgias" type="button" onclick="JavaScript:location.href='listaMedicamentos.php'"><img class="img_icon" src="imagens/medicine.png" height="100px" width="100px"></div>
                    MEDICAMENTOS
                    </h4>
                    </div>
                </form>
            </div>
        </div>
        <br>
      </div>
     </div>
    </div>

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
