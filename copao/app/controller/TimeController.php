<?php
require_once "../crud/CRUDtime.php";

function timeUpd($id){

    $c = new CRUDtime();
    $time = $c->getTime($id);
    include_once "../views/adminTimes.php";
}

function timeU($id){
    $c = new CRUDtime();
    $timee = $c->getTime($id);
    $time = new Time($id, $timee->getLogo(),$_POST['nome'], $_POST['pontos'], $timee->getCor());
    $c->updateTime($time);

    header('location: ../../index.php');
}

function view(){
    $c = new CRUDtime();
    $times = $c->getTimes();
    include_once "../views/times.php";
}

if ($_GET["rota"] == "verTime"){
    $crudTime = new CRUDtime();
    $time = $crudTime->getTime($_GET["id"]);
    $jogadores = $crudTime->getJogadores($_GET["id"]);

    include_once "../views/time.php";
}

if ($_GET['rota'] == "timesUpdate"){
    timeUpd(1);
}

if ($_GET['rota'] == "updateTime") {
timeU($_GET['id']);
}

if($_GET['rota'] == 'ver'){
    view();
}