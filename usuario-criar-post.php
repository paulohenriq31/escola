<?php

    require_once 'classes/Usuario.php';

    $usuario = new Usuario();

    $campodoFomularioUsuario = $_POST['usuario'];
    $campodoFomularioSenha = $_POST['senha'];

    $usuario->inserir($campodoFomularioUsuario, $campodoFomularioSenha);
    //$usuario->inserir($campodoFomularioSenha);

    header('Location:usuarios.php')

?>  