<?php

    include_once "../crud/CRUDpartida.php";
    include_once "../model/Partida.php";
    include_once "../crud/CRUDtime.php";



function formAtt($id1, $id2){
    $t = new CRUDtime();
    $times = $t->getTimes();
    $time = $t->getTime($id1);
    $time2 = $t->getTime($id2);

    require_once "../views/adminPartidasAtt.php";

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
    formAtt();
}

if ($_GET['acao'] == "add"){
    addPartida();
}