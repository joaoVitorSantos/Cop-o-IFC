<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/time.css" type="text/css"> </head>

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
            <div class="col-md-12">
                <img class="img-fluid d-block img-time rounded-circle mx-auto" src="<?= $time->getLogo() ?>" width="200px" height="200px">
                <h1 class="text-center my-2"><?= $time->getNomeTime(); ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Time A</th>
                        <th class="text-center">Resultado</th>
                        <th class="text-right">Time B</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark
                            <img class="img-fluid d-block rounded-circle float-left" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="30

40px">
                        </td>
                        <td class="text-center">8</td>
                        <td class="text-right">Cell
                            <img class="img-fluid d-block rounded-circle float-right" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="30

40px">
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob
                            <img class="img-fluid d-block rounded-circle float-left" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="30

40px">
                        </td>
                        <td class="text-center">15</td>
                        <td class="text-right">Cell
                            <img class="img-fluid d-block rounded-circle float-right" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="30

40px">
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry
                            <img class="img-fluid d-block rounded-circle float-left" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="30

40px">
                        </td>
                        <td class="text-center">0</td>
                        <td class="text-right">Cell
                            <img class="img-fluid d-block rounded-circle float-right" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="30

40px">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Camisa</th>
                        <th>Nome</th>
                        <th>Gols</th>
                        <th>Cartões Amarelos</th>
                        <th>Cartões Vermelhos</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($jogadores as $jogador):?>
                    <tr>
                        <td><?= $jogador->getNumeroCamisa() ?></td>
                        <td><?= $jogador->getNome() ?></td>
                        <td><?= $jogador->getGols() ?></td>
                        <td><?= $jogador->getCartaoAmarelo() ?></td>
                        <td><?= $jogador->getCartaoVermelho() ?></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
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