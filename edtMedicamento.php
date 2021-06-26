<?php 
   //abrir a conexão 
   include 'navbar.php';
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $idMedicamento = trim($_POST['idMedicamento']); 
   $nomeMedicamento = trim($_POST['nomeMedicamento']);
   $qntdMedicamento = trim($_POST['qntdMedicamento']);
   $descMedicamento = trim($_POST['descMedicamento']);

   if (!empty($nomeMedicamento) && !empty($qntdMedicamento)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE medicamentos set nomeMedicamento=? , qntdMedicamento=?, descMedicamento=? where idMedicamento=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($nomeMedicamento, $qntdMedicamento,  $descMedicamento, $idMedicamento));
       Conexao::desconectar(); 
   }
   else echo "campo nome ou nota são vazios..."; 
  
   header("location: listaMedicamentos.php")
?>