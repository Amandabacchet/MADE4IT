<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/cadastro.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https: //fonts.googleapis.com/css2? family= Roboto & display=swap" rel="stylesheet">
        <title>gestao de clientes</title>
    </head>
    <body>
        <div class="login">
            <div class="usuario">
                    <button>
                        <a href="./pesquisa.html">pesquisar cliente</a>
                    </button>
                    <button>
                        <a href="./cadastro.html">cadastrar cliente</a>
                    </button>
                    <button>
                        <a href="./cadastrados.html">todos cadastrados</a>
                    </button>   
                    </div>
                    <div class="usuario1">
                    <form action="php/insert.php" method="POST">
                        <label for="name">First name:</label><br>
                        <input type="text" id="fname" name="fname" value='<?php echo (@($_GET["nomecad"]));?>'><br><br>
                        <label for="name">Last name:</label><br>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="name">CPF:</label><br>
                        <input type="text" id="cpf" name="cpf" value=""><br><br><br><br>
                        <input type="submit" value="Submit">
                    </form> 
                    </div>
            </div>
    </body>