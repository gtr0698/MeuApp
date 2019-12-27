<?php 

$dados = $_POST;

$conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$sql = 'insert into tb_aluno (nome, registro, dtnascimento, ingresso) values (' 
	."'" . $dados['nome'] ."'" . ','
	."'" . $dados['registro'] ."'" . ','
	."'" . $dados['dtnascimento'] ."'" . ','
	."'" . $dados['ingresso'] ."'" . ')';

$stmt = $conn->prepare($sql);

$stmt->execute();

?>