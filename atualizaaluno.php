<!DOCTYPE html>
<html>
	<head>
		<title>Atualiza Aluno</title>
		<meta charset="utf-8">


				<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	</head>
	<body>

		<?php 
		$id = $_GET['id'];
		$conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');
          $stmt = $conn->prepare('select * from tb_aluno where id = ' . $id);

          $stmt->execute();
          $resp = $stmt->fetchAll(PDO::FETCH_ASSOC);

		?>

		<h1>Atualiza Aluno</h1>

		<form action="/teste/atualiza_aluno.php" method="post">
		<input type="hidden" class="form-control" name="id" value="<?php echo $resp[0]['id'];?>">
		
		  <div class="form-group col-md-6">
		    <label for="exampleInputEmail1">Nome</label>
		    <input type="text" class="form-control" name="nome" value="<?php echo $resp[0]['nome'];?>">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="exampleInputPassword1">Registro</label>
		    <input type="text" class="form-control" name="registro" value="<?php echo $resp[0]['registro'];?>">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="exampleInputEmail1">Dt nascimento</label>
		    <input type="text" class="form-control" name="dtnascimento" value="<?php echo $resp[0]['dtnascimento'];?>">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="exampleInputEmail1">Ingresso</label>
		    <input type="text" class="form-control" name="ingresso" value="<?php echo $resp[0]['ingresso'];?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>

	</body>
</html>