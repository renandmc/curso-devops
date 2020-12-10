<?php 
  echo "<p>Testando conexão</p>";
  $server = "192.168.100.32";
  $user = "phpuser";
  $password = "pass";
  
  $conn = new mysqli($server, $user, $password);

  if($conn->connect_error){
    die("Conexão falhou:" . $conn->connect_error);
  }

  echo "<p>Conectado com sucesso</p>";
?>