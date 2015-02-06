<?php
   include("conexao.php");
   $nome = $_POST["nome"];
   $telefone = $_POST["telefone"];
   $email = $_POST["email"];
   $endereco = $_POST["endereco"];
   $sql = "INSERT INTO contatos (nome,telefone,email,endereco) VALUES ('$nome', '$telefone', '$email','$endereco')"; 
   mysql_query($sql) or die(mysql_error());
   header("Location:listar.php");
?>
