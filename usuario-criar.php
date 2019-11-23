<?php require_once 'cabecalho.php';?>
<h2>Criar novo usuario</h2>
<form name="nova-usuario" method="post" action="usuario-criar-post.php">
    Usuario
    <input name="usuario" maxlength="30">
    <br>
    Senha:
    <input name="senha" maxlength="30">
    <br>
    <button type="submit">Salvar</button>
    </form>
    <?php require_once 'rodape.php';?>