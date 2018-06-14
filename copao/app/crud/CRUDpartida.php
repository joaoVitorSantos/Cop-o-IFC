<?php

require_once "../app/model/DBConexao.php";

class CRUDpartida
{
    private $conexao;

    public function __construct(){
        $this->conexao = DBConexao::getConexao();

    }

    //INSERT
    public function insertPartida(Partida $partida){
        $sql = "INSERT INTO partida (id_partida, id_time_mandante, id_time_visitante, data, resultado) 
                VALUES ('{$partida->getIdPartida()}', '{$partida->getIdTimeMandante()}', '{$partida->getIdTimeVisitante()}', '{$partida->getData()}', '{$partida->getResultado()}')";

        $this->conexao->exec($sql);
    }

    //DELETE
    public function deletePartida(Partida $excluir){
        $sql = "DELETE FROM partida WHERE id_partida=".$excluir;

        $this->conexao->exec($sql);
    }

    //UPDATE
    public function updatePartida(Partida $partida){
        $sql = "UPDATE partida SET id_partida='{$partida->getIdPartida()}, {$partida->getIdTimeMandante()}, {$partida->getIdTimeVisitante()}, {$partida->getData()}, {$partida->getResultado()}'
                WHERE id_partida=".$partida->getIdPartida();

        $this->conexao->exec($sql);
    }

    //GET PARTIDA
    public function getPartida(int $id){
        $sql = "SELECT * FROM partida WHERE id_partida=".$id;
        $result = $this->conexao->query($sql);
        $partida = $result->fetch(PDO::FETCH_ASSOC);
        $objPArtida = new Partida($partida['id_partida'], $partida['id_time_mandante'], $partida['id_time_visitante'], $partida['data'], $partida['resultado']);

        return $objPArtida;
    }

    //GET PARTIDAS
    public function getPartidas(){
        $sql = "SELECT * FROM partida";
        $result = $this->conexao->query($sql);
        $partidas = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($partidas as $partida){
                $idpar = $partida['id_partida'];
                $idtimeman = $partida['id_time_mandante'];
                $idtimevisi = $partida['id_time_visitante'];
                $data = $partida['data'];
                $resultado = $partida['resultado'];
                $obj = new Partida($idpar, $idtimeman, $idtimevisi, $data, $resultado);
                $listapartidas[] = $obj;
            }

            return $listapartidas;
    }
}