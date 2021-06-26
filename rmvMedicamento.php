<?php
   $idMedicamento = trim($_POST['idMedicamento']); 

   if (!empty($idMedicamento)){
       include 'conexao.php';  
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "DELETE from medicamentos WHERE idMedicamento=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($idMedicamento));
       Conexao::desconectar(); 
   }
   else echo "campo id vazio..."; 
   header("location: listaMedicamentos.php")
?>