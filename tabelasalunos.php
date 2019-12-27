<!DOCTYPE html>
<html>
  <head>
    <title>Tabela Alunos</title>
    <meta charset="utf-8">

    <style>

      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }

    </style>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>

  <body>
    <a class="btn btn-primary" href="/teste/cadastraaluno.html" role="button">Cadastrar</a>
    <h1>Alunos</h1>

      <table>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Registro</th>
          <th>Dt Nascimento</th>
          <th>Ingresso</th>
          <th></th>
        </tr>

        <?php 
          $conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');
          $stmt = $conn->prepare('select * from tb_aluno');

          $stmt->execute();
          $resp = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <?php for($i = 0; $i < count($resp); $i++){?>

        <tr>
          <td><?php echo $resp[$i]['id'];?></td>
          <td><?php echo $resp[$i]['nome'];?></td>
          <td><?php echo $resp[$i]['registro'];?></td>
          <td><?php echo $resp[$i]['dtnascimento'];?></td>
          <td><?php echo $resp[$i]['ingresso'];?></td>
          <td><a class="btn btn-success" href="/teste/atualizaaluno.php?id=<?php echo $resp[$i]['id'];?>" role="button">Atualizar</a></td>
        </tr>
        <?php }?>

      </table>
  </body>
</html>