<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
            <a class="btn navbar-btn ml-2 text-white btn-secondary">
                <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;Olá&nbsp;<?= $user ?></a>
            <a href="UsuarioController.php?rota=admin" class="btn navbar-btn ml-2 text-white btn-secondary">
                <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;Admin</a>
            <a href="UsuarioController.php?rota=logout" class="btn navbar-btn ml-2 text-white btn-danger">&nbsp;Sair</a>
        </div>
    </div>
</nav><div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Posição</th>
                        <th>Time</th>
                        <th>Pontos</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $a = 1;foreach ($times as $t): ?>
                        <tr>
                            <td><?= $a ?></td>
                            <td><?= $t->getNomeTime() ?></td>
                            <td><?= $t->getPontos() ?></td>
                            <td><a href="TimeController.php?rota=timesUpdate&id=<?= $t->getIdTime()?>"><button class="btn-secondary btn">Editar</button></a>
                                <a href="TimeController.php?rota=delete&id=<?= $t->getIdTime()?>"><button class="btn-secondary btn">Excluir</button></a></td>
                        </tr>
                        <?php $a += 1; endforeach;?>

                    </tbody>
                </table>
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
            <div class="col-md-12 mt-3 text-center">
                <p>© Copyright 2018 Copão IFC - Todos os direitos Reservados.</p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>