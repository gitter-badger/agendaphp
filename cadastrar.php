<html>
   <head>
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <meta charset="UTF-8" />
   </head>
   <body>
<h1>Cadastrar novo contato</h1>
<div class="row">
 <div class="col-sm-12">
<form action="salvar.php" method="POST">
   <div class="form-group">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control" />
   </div>
   <div class="form-group">
      <label>Telefone</label>
      <input type="text" name="telefone" class="form-control" />
   </div>
   <div class="form-group">
     <label>E-mail</label>
     <input type="text" name="email" class="form-control"/>
   </div>
   <div class="form-group">
      <label>Endereço</label>   
      <input type="text" name="endereco" class="form-control"/>
   </div> 
   <input type="submit" value="Salvar" class="btn btn-primary"/>
</form>
	</div>
	</div>

<a href="listar.php">Voltar para lista</a>

</body>
</html>

