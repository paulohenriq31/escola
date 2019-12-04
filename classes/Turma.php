<?php

class Turma{

    public function listarTurma(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=escola","root","");
        
        $query = "SELECT id, sala, periodo, horarioInicio, horarioFim  FROM tb_turma";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        return $lista;
    }


}


?>