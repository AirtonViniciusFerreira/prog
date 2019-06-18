<?php
function getConnection() {
  $username = 'prova1';
  $password = 'prova977+';
  $conn = new PDO('mysql:host=localhost;dbname=prova1',  $username, $password);
  return $conn;
}
?>
