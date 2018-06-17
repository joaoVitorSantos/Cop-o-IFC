<?php
require_once "../crud/CRUDtime.php";

if ($_GET["rota"] == "verTime"){
    $crudTime = new CRUDtime();
    $time = $crudTime->getTime($_GET["id"]);
    $jogadores = $crudTime->getJogadores($_GET["id"]);

    include_once "../views/time.php";
}