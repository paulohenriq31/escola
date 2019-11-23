<?php
require_once 'classes/Usuario.php';

$usuario = new Usuario();

$lista = $usuario->listar();

require_once 'cabecalho.php';
?>

<a href="usuario-criar.php">adicionar usuario</a>
<br>
<h2>Usuarios</h2>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Usuarios</th>
        <th>Senha</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){?>
            <tr>
                <td><?php echo $linha['id'];?></th>
                <td><?php echo $linha['usuario'];?></td>
                <td><?php echo $linha['senha'];?></td>
                <td>
                    <a href="usuario-editar.php" class="btn btn-info">Alterar</a>
                    <a href="usuario-excluir.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php
require_once 'rodape.php';
?>
