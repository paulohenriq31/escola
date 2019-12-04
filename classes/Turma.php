<?php

class Turma{

    public $turma;
    public $horario;
    public $horaEntrada;
    public $horaSaida;

    public function listarTurma(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=escola","root","");
        
        $query = "SELECT id, sala, periodo, horarioInicio, horarioFim  FROM tb_turma";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        return $lista;
    }

    public function inserirTurma($turma, $horario, $horaEntrada, $horaSaida){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=escola","root","");
        $query="INSERT INTO tb_turma(sala, periodo, horarioInicio, horarioFim) VALUES ('".$turma."', '".$horario."', '".$horaEntrada."', '".$horaSaida."')";
        $conexao->exec($query);
    }



}


?>