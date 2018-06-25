<?php

    require_once "../crud/CRUDusuario.php";
    require_once "../model/Usuario.php";

    function loginForm(){
        include_once "../views/loginForm.php";
    }

    function confirmarLogin($email, $senha){
        $c = new CRUDusuario();
        $resultado = $c->verificaLogin($email, $senha);

        if ($resultado != 'nao'){
            session_start();
            $_SESSION['nome'] = $resultado['nome_usuario'];
            $_SESSION['tipo'] = $resultado['id_tipo_usuario'];

            return $_SESSION;

        }

        else {return false;}

    }


if($_GET['rota'] == 'loginForm'){
    loginForm();
}

if($_GET['rota'] == 'confirmarLogin'){
    $resultado = confirmarLogin($_POST['email'], $_POST['senha']);
    if ($resultado != false){
        header('location: HomeController.php');
    }

    if ($resultado == false){
        echo "deu erro";
    }
}