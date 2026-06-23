<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class = "container fundo">

    <?php
      require 'Usuario.class.php';
      $usuario = new Usuario();
      $con = $usuario->conecta();

      if(!$con){
          echo "Banco de dados indisponivel!";
          exit();
      }

      else{
          echo "<a href = 'cadastrarPAG.php' class = 'btn btn-success my-5'> Novo usuario </a>";

          $usuarios = $usuario->listarUsers();

          $table = '<table class = "table table-striped">';
          $table .= '<thead>';
          $table .= '<tr>';
          $table .= '<th> selecionar Usuario</th>';
          $table .= '<th> Codigo </th>';
          $table .= '<th> Nome </th>';
          $table .= '<th>Email</th>';
          $table .= '<th colspan = "2">Ações</th>';
          $table .= '</tr>';
          $table .= '</thead>';
          $table .= '<tbody>';

          foreach($usuarios as $index){
              $id = $index['id'];
              $nome = $index['nome'];
              $email = $index['email'];

              $table .= '<tr>';
              $table .= "<td><input type = 'checkbox' value = '$id'></td>";
              $table .= "<td>$id</td>";
              $table .= "<td>$nome</td>";
              $table .= "<td>$email</td>";
              $table .= "<td><a class = 'btn btn-info' href = 'editar.php?codigo=$id'>Editar</a></td>";
              $table .= "<td><a class = 'btn btn-danger' href = 'deletar.php?id=$id'>Excluir</a></td>";
              $table .= '</tr>';
          }

          $table .= '</tbody>';
          $table .= '</table>';
      }

      echo $table;
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
```
