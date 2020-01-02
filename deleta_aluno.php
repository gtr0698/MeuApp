<?php 

$dados = $_POST;

$conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$sql = 'delete from tb_aluno where id = ' . "'" . $dados['id'] . "'";

$stmt = $conn->prepare($sql);

$stmt->execute();

header("location: /teste/tabelasalunos.php");

?>