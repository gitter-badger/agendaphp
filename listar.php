<html>
   <head>
      <title>Listar contatos</title>
      <link rel="stylesheet" href="css/bootstrap.min.css" />
   </head>
   <body>

<h1>Listar contatos</h1>
<?php
   include "conexao.php";
   $sql = "SELECT * FROM contatos" or die(mysql_error());
   $resultado = mysql_query($sql);
  
   echo "<table class='table table-striped'>";
   while ($linha=mysql_fetch_array($resultado)) {
     echo "<tr>";
     echo "<td>".$linha["nome"]."</td>";
     echo "<td>".$linha["telefone"]."</td>";
     echo "<td>".$linha["endereco"]."</td>";
     echo "<td>".$linha["email"]."</td>";
     echo "</tr>";
   }
   echo "</table>";
?>

<a href="cadastrar.php" class="btn btn-primary">Cadastrar novo contato</a>
</body>
</html>
