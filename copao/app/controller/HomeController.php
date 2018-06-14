<?php

require_once __DIR__."/../crud/CRUDtime.php";
require_once __DIR__."/../crud/CRUDjogador.php";

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

index();

?>