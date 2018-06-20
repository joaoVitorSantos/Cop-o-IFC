<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
<div class="py-5 text-white bg-primary my-0 h-75">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <p class="lead">Update a player</p>
                <form class="form" method="post" action="JogadorController.php?acao=editarjogconf&id=<?= $id ?>">
                    <div class="form-group">
                        <input type="text" name="id_jogador" class="form-control" placeholder="Id of the player" value="<?= $id?>">
                        <input type="text" name="numero_camisa" class="form-control" placeholder="The number of shirt" value="<?= $jogador->getNumeroCamisa()?>">
                        <input type="text" name="nome" class="form-control" placeholder="The name" value="<?= $jogador->getNome()?>">
                        <input type="number" name="gols" class="form-control" placeholder="Number of gols" value="<?= $jogador->getGols()?>">
                        <input type="number" name="cartao_amarelo" class="form-control" placeholder="Number of yellow cards" value="<?= $jogador->getCartaoAmarelo()?>">
                        <input type="number" name="cartao_vermelho" class="form-control" placeholder="Number of red cards" value="<?= $jogador->getCartaoVermelho()?>">
                        <input type="number" name="id_time" class="form-control" placeholder="ID of team" value="<?= $jogador->getIdTime()?>"> </div>
                    <button type="submit" class="btn btn-primary ml-3">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>