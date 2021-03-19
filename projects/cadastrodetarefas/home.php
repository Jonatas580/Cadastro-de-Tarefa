<?php

//if(!isset($_SESSION['login']) and !isset($_SESSION['senha'])){
   // header("Location:index.php?erro=1");
//}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Cadastro</title>
    
</head>

<body>
    <a href="">Nova Tarefa</a>
    <a href="">Listar Tarefas</a>
    <a href="">Sair</a> <br> </br>

    <table class="table">
     <tr>
            <td>Nome</td>
            <td>Data da Entrega</td>            
            <td>Data de Conclusão</td>
        </tr>
        <tr>
            <td></td>
             <td></td>
             <td></td>
            
        </tr>
    </table>

<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>