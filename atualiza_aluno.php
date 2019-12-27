<?php 

$dados = $_POST;

$conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$sql = 'update tb_aluno set nome = ' 
	."'" . $dados['nome'] ."'" . ',' .
	'registro = ' ."'" . $dados['registro'] ."'" . ',' .
	'dtnascimento = ' ."'" . $dados['dtnascimento'] ."'" . ',' .
	'ingresso = ' ."'" . $dados['ingresso'] ."'" .
	' where id = ' . $dados['id'];

$stmt = $conn->prepare($sql);

$stmt->execute();

header("location: /teste/tabelasalunos.php");

?>