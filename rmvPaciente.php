<?php
   $idPaciente = trim($_POST['idPaciente']); 

   if (!empty($idPaciente)){
       include 'conexao.php';  
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "DELETE from pacientes WHERE idPaciente=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($idPaciente));
       Conexao::desconectar(); 
   }
   else echo "campo id vazio..."; 
   header("location: listaPacientes.php")
?>