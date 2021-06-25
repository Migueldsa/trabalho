<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $nomePaciente = trim($_POST['txtNome']);
   $idadePaciente = trim($_POST['txtIdade']);
   $sintomasPaciente = trim($_POST['txtSintomas']);
   $enderecoPaciente = trim($_POST['txtEndereco']);
   $telefonePaciente = trim($_POST['txtTelefone']);

   if (!empty($nomePaciente) && !empty($sintomasPaciente)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO pacientes (nomePaciente, idadePaciente, sintomasPaciente, enderecoPaciente, telefonePaciente) VALUES (?, ?, ?, ?, ?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($nomePaciente, $idadePaciente, $sintomasPaciente, $enderecoPaciente, $telefonePaciente));
       Conexao::desconectar(); 
   }
   else echo "campo nome ou nota são vazios..."; 
  
   header("location: listaPacientes.php")
?>