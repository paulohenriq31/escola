<?php
class Usuario{

    public $id;
    public $usuario;
    public $senha;

    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=escola","root","");
        
        $query = "SELECT id, usuario, senha FROM tb_usuarios";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir($usuario, $senha){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=escola","root","");
        
        $query="INSERT INTO tb_usuarios(usuario, senha) VALUES ('".$usuario."', '".$senha."')";

               
        $conexao->exec($query);
        
    }
}