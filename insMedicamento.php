<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $nomeMedicamento = trim($_POST['txtNome']);
   $qntdMedicamento = trim($_POST['txtQntd']);
   $descMedicamento = trim($_POST['txtDesc']);

   if (!empty($nomeMedicamento) && !empty($qntdMedicamento)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO medicamentos (nomeMedicamento, qntdMedicamento, descMedicamento) VALUES (?, ?, ?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($nomeMedicamento, $qntdMedicamento, $descMedicamento));
       Conexao::desconectar(); 
   }
   else echo "campo nome ou nota são vazios..."; 
  
   header("location: listaMedicamentos.php")
?>