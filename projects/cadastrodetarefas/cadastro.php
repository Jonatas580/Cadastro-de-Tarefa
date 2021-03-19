<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Cadastro do Usuario</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>

        <h3 >Preencha os Campos Abaixo</h3>

        <form action="" class="col-6 mx-auto">

                Nome:
               <input type="text" name="nome"> <br>

               E-mail:
               <input type="email" name="email"> <br> 

                Data de Nascimento:
               <input type="date" name="date"> <br> 

               Senha:              
               <input type="password" name="senha" id="senha" onkeyup="validaSenha()"> <br>

                Confirmação de Senha:
               <input type="password" name="senha" id="senha" onkeyup="validaSenha()"> <br>                                 
               <button class="btn btn-primary btn-sm">Cadastrar</button>
        </form>
        <script>  function validaSenha(){
                $senha = document.getElementById("senha").value;
                $senha = document.getElementById("senha2").value;
                if($senha != $senha2){
                        document.getElementById("senha2").style.border="red 1px solid";
                }else(
                        document.getElementById("senha2").style.border="gree 1px solid"
                )
                
        }
</script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>    

</body>
</html>