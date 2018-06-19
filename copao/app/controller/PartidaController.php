<?php

    include_once "../crud/CRUDpartida.php";
    include_once "../model/Partida.php";
    include_once "../crud/CRUDtime.php";



function formAtt(Partida $partida){
    $t = new CRUDtime();
    $times = $t->getTimes();
    $nomeTime1 = $partida->getIdTimeMandante();
    $nomeTime2 = $partida->getIdTimeVisitante();

    $time = $t->getTime($nomeTime1);
    $time2 = $t->getTime($nomeTime2);

    include_once "../views/adminPartidasAtt.php";

}

function attPartida($id){

    $p = new Partida($id, $_POST['timeA'], $_POST['timeB'], $_POST['data'], $_POST['gol1'], $_POST['gol2'], $_POST['vencedor']);
    $part = new CRUDpartida();
    $part->updatePartida($p, $id);

   header('location: ../../index.php');


}





function form(){
    $time = new CRUDtime();
    $times = $time->getTimes();
    require_once "../views/adminPartidas.php";
}

function addPartida(){
    $cP = new CRUDpartida();
    $p = new Partida(null, $_POST['timeA'], $_POST['timeB'], $_POST['data'], $_POST['gol1'], $_POST['gol2'], $_POST['vencedor']);

    echo $cP->insertPartida($p);

    header('location: ../../index.php');

}

if ($_GET['acao'] == "addForm"){
    form();
}

if ($_GET['acao'] == "attForm"){
    $part = new CRUDpartida();
    $partida = $part->getPartida(3);

    formAtt($partida);
}

if ($_GET['acao'] == "add"){
    addPartida();
}

if ($_GET['acao'] == "att"){
    attPartida($_GET['id']);
}