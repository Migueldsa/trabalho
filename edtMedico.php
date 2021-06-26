<?php 
   //abrir a conexão 
   include 'navbar.php';
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $idMedico = trim($_POST['idMedico']); 
   $nomeMedico = trim($_POST['nomeMedico']);
   $areaMedico = trim($_POST['areaMedico']);
   $escalaMedico = trim($_POST['escalaMedico']);
   $emailMedico = trim($_POST['emailMedico']);
   $crmMedico = trim($_POST['crmMedico']);

   if (!empty($nomeMedico) && !empty($escalaMedico)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE medicos set nomeMedico=? , areaMedico=?, escalaMedico=?, emailMedico=?, crmMedico=? where idMedico=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($nomeMedico, $areaMedico, $escalaMedico, $emailMedico, $crmMedico, $idMedico));
       Conexao::desconectar(); 
   }
   else echo "campo nome ou nota são vazios..."; 
  
   header("location: listaMedicos.php")
?>