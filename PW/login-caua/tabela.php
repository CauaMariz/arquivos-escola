<?php
require "Usuario.class.php";
$usuario = new Usuario();

$con = $usuario->conecta();

if ($con) {
    $user = $usuario->listarUsers();

    if (empty($user)) {
        echo "Nao ha usuarios para listar";
    } else {
?>
        <style>
            table {
                width: max-content;
            }
            body{
                align-content: center;
            }
            div {

                border: 1px solid grey;
                border-radius: 20px;
                width: fit-content;
                min-width: 400px;
                height: fit-content;
                min-height: 300px;
                padding: 10px 20px 20px 20px;
                justify-items: center;
                align-content: center;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                margin: 0 auto;
            }

            p {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 23px;
                margin-top: 0;
            }

            td {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                padding-left: 20px;
                padding-right: 20px;
            }

            a {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                padding-left: 20px;
                
            }
            th{
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                text-decoration: none;
                color: black;
                padding-right: 20px;
            }
            a{
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                text-decoration: none;
                font-weight: bold;
                padding-right: 20px;
            }   
            #editarLink{
               color: green;
            }
            #excluirLink{
                color: red;
            }
            tr{
                border: 1px solid grey;
                background-color: gainsboro;
            }
        </style>
        <div>
            <p>Dados dos usuários</p>
            <table>
                <tr>
                    <td><b>Código:</b></td>
                    <td><b>Nome:</b></td>
                    <td><b>Email:</b></td>
                    <th colspan="2">Ações</th>
                </tr>
                <?php
                foreach ($user as $item) {
                    $id = $item['id'];
                    $nome = $item['nome'];
                    $email = $item['email'];
                ?>

                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['nome']; ?></td>
                        <td><?php echo $item['email']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $item['id'];?>" id = "editarLink">Editar</a>
                            <a href="excluir.php?id=<?php echo $item['id']; ?>" id = "excluirLink">Excluir</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </table>
        </div>
<?php
    }
} else {
    echo "Banco indisponivel, tente mais tarde!";
}
