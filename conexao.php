<?php
   $conexao = mysql_connect("localhost","root","root") or die("Erro ao conectar ao banco de dados". mysql_error());

   echo "Conectado com sucesso";
   mysql_select_db("agenda");
   
?>
