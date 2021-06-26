<?php 
   //abrir a conexão 
   include 'navbar.php';
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $idPaciente = trim($_POST['idPaciente']); 
   $nomePaciente = trim($_POST['nomePaciente']);
   $idadePaciente = trim($_POST['idadePaciente']);
   $sintomasPaciente = trim($_POST['sintomasPaciente']);
   $enderecoPaciente = trim($_POST['enderecoPaciente']);
   $telefonePaciente = trim($_POST['telefonePaciente']);

   if (!empty($nomePaciente) && !empty($sintomasPaciente)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE pacientes set nomePaciente=? , idadePaciente=?, sintomasPaciente=?, enderecoPaciente=?, telefonePaciente=? where idPaciente=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($nomePaciente, $idadePaciente, $sintomasPaciente, $enderecoPaciente, $telefonePaciente, $idPaciente));
       Conexao::desconectar(); 
   }
   else echo "campo nome ou nota são vazios..."; 
  
   header("location: listaPacientes.php")
?>