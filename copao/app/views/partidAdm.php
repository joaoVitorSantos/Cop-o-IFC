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
        <a class="navbar-brand" href="#">Copão IF</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
            <a class="btn navbar-btn ml-2 text-white btn-secondary">
                <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;Login</a>
        </div>
    </div>
</nav>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Time A</th>
                        <th>Resultado</th>
                        <th class="text-right">Time B</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr><a href="PartidaController.php?acao=addForm"><button class="btn btn-secondary">Adicionar Partida</button></a></tr>
                    <?php  foreach ($partidas as $p): $t1 = $t->getTime($p->getIdTimeMandante()); $t2 =  $t->getTime($p->getIdTimeVisitante());?>
                        <tr>
                            <td><?= $p->getData() ?></td>
                            <td class="text-left">
                                <img class="d-block rounded-circle float-left" src="<?= $t1->getLogo() ?>" width="40px" height="40px"><?= $t1->getNomeTime() ?>&nbsp</td>
                            <td ><?= $p->getResultadoTimeA() ?>x<?= $p->getResultadoTimeB() ?></td>
                            <td class="text-right"><?= $t2->getNomeTime() ?> &nbsp;
                                <img class="d-block rounded-circle float-right" src="<?= $t2->getLogo() ?>" width="40px" height="40px">
                            </td>
                            <td><a><a href="PartidaController.php?acao=attForm&id=<?=$p->getIdPartida()?>"><button class="btn btn-secondary">Editar</button></a>
                                <a href="PartidaController.php?acao=delete&id=<?=$p->getIdPartida()?>"><button class="btn btn-secondary">Excluir</button></a>
                        </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
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

</body>

</html>