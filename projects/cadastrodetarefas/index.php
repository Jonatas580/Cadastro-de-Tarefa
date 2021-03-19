<?php

if(isset($_GET['erro'])){
    if($_GET['erro'] == 1){
        $erro = "Acesso Negado!";
    }
}else{
    $erro= "";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Cadastro de tarefas</title>
</head>

<body>
<div class="container">
<div class="row py-5 mt-5">
<div class="col-6 m-auto">
    <h3>Login</h3>
    
    <?php if(isset($erro) && !empty($erro)):?>
        <div class="alert alert-danger"><?= $erro ?></div>
    <?php endif;?>
</div>
<div class="col-lg-12">
    <form action="" class="col-6 mx-auto">
        <input class="form-control" type="text" name="login"> <br>
        <input class="form-control" type="password" name="senha"> <br>
        <span></span>
        <button class="btn btn-primary btn-sm">Enviar</button>
        
    </form>

        <a href="cadastro.php">Cadastre-se</a>
        </div>
        </div>
        </div> 
        </div> 
        <!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>