
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
<?php if (!isset($_SESSION) or !isset($_SESSION['tipo'])){
    echo "<nav class=\"navbar navbar-expand-md bg-primary navbar-dark\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"../../index.php\">Copão IF</a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar2SupportedContent\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse text-center justify-content-end\" id=\"navbar2SupportedContent\">
        <a href=\"../controller/UsuarioController.php?rota=loginForm\" class=\"btn navbar-btn ml-2 text-white btn-secondary\">
          <i class=\"fa d-inline fa-lg fa-user-circle-o\"></i>&nbsp;Login</a>
        <a href=\"UsuarioController.php?rota=formCadastro\" class=\"btn navbar-btn ml-2 text-white btn-secondary\">
          <i class=\"fa d-inline fa-lg fa-user-circle-o\"></i>&nbsp;Cadastrar</a>
      </div>
    </div>
  </nav>";
}

elseif (isset($_SESSION) and $_SESSION['tipo'] != 2){
    include_once "navLogged.php";
}

elseif (isset($_SESSION) and $_SESSION['tipo'] == 2){

    include_once "navAdmin.php";
}

?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3"> </div>
            <div class="col-md-6">
                <div class="card text-white p-5 bg-primary">
                    <div class="card-body">
                        <h1 class="mb-4">Cadastre-se</h1>
                        <form method="post" action="UsuarioController.php?rota=confirmaCadastro">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control" placeholder="Enter email"> </div>
                            <div class="form-group">
                                <label>Nome Usuario</label>
                                <input name="nome" type="text" class="form-control" placeholder="Nome"> </div>
                            <div class="form-group">
                                <label>Senha
                                    <br>
                                </label>
                                <input name="senha" type="password" class="form-control" placeholder="Senha"> </div>
                            <div class="form-group">
                                <label>Corfirmar Senha</label>
                                <input type="password" class="form-control" placeholder="Senha"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                            </div>
                            <button type="submit" class="btn btn-secondary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<div class="py-5 text-white bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <p class="lead">Sign up to our newsletter for the latest news</p>
                <form class="form-inline">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your e-mail here"> </div>
                    <button type="submit" class="btn btn-primary ml-3">Subscribe</button>
                </form>
            </div>
            <div class="col-4 col-md-1 align-self-center">
                <a href="https://www.facebook.com" target="_blank">
                    <i class="fa fa-fw fa-facebook fa-3x text-white"></i>
                </a>
            </div>
            <div class="col-4 col-md-1 align-self-center">
                <a href="https://twitter.com" target="_blank">
                    <i class="fa fa-fw fa-twitter fa-3x text-white"></i>
                </a>
            </div>
            <div class="col-4 col-md-1 align-self-center">
                <a href="https://www.instagram.com" target="_blank">
                    <i class="fa fa-fw fa-instagram text-white fa-3x"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3 text-center">
                <p>© Copyright 2017 Pingendo - All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
</pingendo>
</body>

</html>