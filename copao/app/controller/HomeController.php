<?php

require_once __DIR__."/../crud/CRUDtime.php";
require_once __DIR__."/../crud/CRUDjogador.php";

session_start();


function index(){

    $crudTime = new CRUDtime();
    $times = $crudTime->getTimes();
    $timesP = $crudTime->getTimesPontos();
    $crudJogadores = new CRUDjogador();

    $artilheiros = $crudJogadores->getJogadoresGol();

    $arrayTimes = array();
    foreach ($artilheiros as $artilheiro){
        $time = $crudTime->getTime($artilheiro->getIdTime());
        $arrayTimes[] = $time;
    }

    include_once "../views/index.php";
}

function indexLogado(){

    $crudTime = new CRUDtime();
    $times = $crudTime->getTimes();
    $timesP = $crudTime->getTimesPontos();
    $crudJogadores = new CRUDjogador();

    $artilheiros = $crudJogadores->getJogadoresGol();

    $arrayTimes = array();
    foreach ($artilheiros as $artilheiro){
        $time = $crudTime->getTime($artilheiro->getIdTime());
        $arrayTimes[] = $time;
    }

    $user = $_SESSION['nome'];
    $tipo = $_SESSION['tipo'];

    $logado = 'sim';

    include_once "../views/index.php";
}



if (!isset($_SESSION['tipo'])){
    index();
}

if (isset($_SESSION['tipo'])){
    indexLogado();
}


?>