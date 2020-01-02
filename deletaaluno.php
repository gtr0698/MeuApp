<!DOCTYPE html>
<html>
	<head>
		<title>Deleta Aluno</title>
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

		<h1>Deleta Aluno</h1>

		<form action="/teste/deleta_aluno.php" method="post">
		<input type="hidden" class="form-control" name="id" value="<?php echo $resp[0]['id'];?>">
		
		  <button type="submit" class="btn btn-primary">Deletar</button>
		</form>
	</body>
</html>