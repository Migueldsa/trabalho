<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $nomeMedico = trim($_POST['txtNome']);
   $areaMedico = trim($_POST['txtArea']);
   $escalaMedico = trim($_POST['txtEscala']);
   $emailMedico = trim($_POST['txtEmail']);
   $crmMedico = trim($_POST['txtCrm']);

   if (!empty($nomeMedico) && !empty($areaMedico)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO medicos (nomeMedico, areaMedico, escalaMedico, emailMedico, crmMedico) VALUES (?, ?, ?, ?, ?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($nomeMedico, $areaMedico, $escalaMedico, $emailMedico, $crmMedico));
       Conexao::desconectar(); 
   }
   else echo "campo nome ou nota são vazios..."; 
  
   header("location: listaMedicos.php")
?>