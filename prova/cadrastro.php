<?php
require_once "banco.php";

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if(empty($nome)){
  die("Nome é obrigatório");
}
if(empty($email)){
  die("E-mail é obrigatório");
}
if(empty($Telefone)){
  die("Telefone é obrigatório");
}
try{
  $sql = "INSERT INTO usuarios(nome, apelido, email, telefone) VALUES (:nome,:apelido, :email, :telefone)";
  $stmt = getConnection()->prepare($sql);
  $stmt = bindParam(':nome', $nome);
  $stmt = bindParam(':apelido', $apelido);
  $stmt = bindParam(':email', $email);
  $stmt = bindParam(':telefone', $telefone);
  if($stmt->execute()){
    echo "Tudo certo";
  }
  else{
    echo "Falhou";
  }
}catch(PDOException $e) {
echo 'Erro: ' . $e->getMessage();
}
?>
