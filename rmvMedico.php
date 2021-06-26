<?php
   $idMedico = trim($_POST['idMedico']); 

   if (!empty($idMedico)){
       include 'conexao.php';  
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "DELETE from medicos WHERE idMedico=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($idMedico));
       Conexao::desconectar(); 
   }
   else echo "campo id vazio..."; 
   header("location: listaMedicos.php")
?>