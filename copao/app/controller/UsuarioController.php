<?php

    require_once "../crud/CRUDusuario.php";
    require_once "../model/Usuario.php";

    session_start();

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

    function formCadastro(){
        include_once "../views/cadastroForm.php";
    }

    function confirmaCadastro(Usuario $u){
        $c = new CRUDusuario();
        $resultado = $c->InsertUsuario($u);

        if ($resultado == true){
            include_once  "../views/avisoConfirmado.php";
        }
        else{ include_once "../views/erroCad.php";}


    }


if($_GET['rota'] == 'loginForm'){
    loginForm();
}

if($_GET['rota'] == 'confirmarLogin'){

    $resultado = confirmarLogin($_POST['email'],  $_POST['senha']);
    if ($resultado != false){
        header('location: HomeController.php');
    }

    if ($resultado == false){
        include_once "../views/erroLog.php";
    }
}

if(isset($_GET['rota']) and $_GET['rota'] == 'logout'){
    session_destroy();
    header('location: HomeController.php');
}

if (isset($_GET['rota']) and $_GET['rota'] == 'formCadastro'){
        formCadastro();
}

if (isset($_GET['rota']) and $_GET['rota'] == 'confirmaCadastro'){

        $senha = base64_encode($_POST['senha']);
    $u = new Usuario(null,$_POST['nome'], 1,$senha, $_POST['email']);
    confirmacadastro($u);
}