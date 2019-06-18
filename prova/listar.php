<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/indexcss.css">
    <title>Lista de Usuários</title>

  </head>
  <body>
    <div class="link">
      <a href="index.html">Cadrastrar Contato</a>
    </div>

<table border="1">
  <thead>
    <th>Nome</th><th>Apelido</th><th>E-mail</th><th>telefone</th>
  </thead>
  <tbody>
    <?php
    require_once "banco.php";
    $sql = "select nome, apelido, email, telefone from usuarios";

    foreach (getConnection()->query($sql) as $row) {
      echo "<tr>";
      echo "<td>".$row['nome']."</td>";
      echo "<td>".$row['apelido']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['telefone']."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
