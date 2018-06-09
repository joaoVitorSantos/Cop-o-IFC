<?php

class Partida
{
    private $id_partida;
    private $id_time_mandante;
    private $id_time_visitante;
    private $data;
    private $resultado;

    public function __construct($id_partida, $id_time_mandante, $id_time_visitante, $data, $resultado)
    {
        $this->id_partida = $id_partida;
        $this->id_time_mandante = $id_time_mandante;
        $this->id_time_visitante = $id_time_visitante;
        $this->data = $data;
        $this->resultado = $resultado;
    }

    public function getIdPartida()
    {
        return $this->id_partida;
    }

    public function setIdPartida($id_partida)
    {
        $this->id_partida = $id_partida;
    }

    public function getIdTimeMandante()
    {
        return $this->id_time_mandante;
    }

    public function setIdTimeMandante($id_time_mandante)
    {
        $this->id_time_mandante = $id_time_mandante;
    }

    public function getIdTimeVisitante()
    {
        return $this->id_time_visitante;
    }

    public function setIdTimeVisitante($id_time_visitante)
    {
        $this->id_time_visitante = $id_time_visitante;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }
}
