<?php

class Time
{

    private $id_time;
    private $nome_time;
    private $pontos;
    private $foto;
    private $cor;

    public function __construct($id_time, $nome_time, $pontos, $foto, $cor)
    {
        $this->id_time = $id_time;
        $this->nome_time = $nome_time;
        $this->pontos = $pontos;
        $this->foto = $foto;
        $this->cor = $cor;
    }

    public function getIdTime()
    {
        return $this->id_time;
    }

    public function setIdTime($id_time)
    {
        $this->id_time = $id_time;
    }

    public function getNomeTime()
    {
        return $this->nome_time;
    }

    public function setNomeTime($nome_time)
    {
        $this->nome_time = $nome_time;
    }

    public function getPontos()
    {
        return $this->pontos;
    }

    public function setPontos($pontos)
    {
        $this->pontos = $pontos;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

}