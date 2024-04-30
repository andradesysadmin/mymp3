<?php

  if(!isset($_SESSION)){
        session_start();
    }

    @$nome = $_POST['nome'];
    @$senha = $_POST['senha'];  
    $_SESSION['name'] = "Gabriel Andrade";
    $_SESSION['senha'] = "galileia";

    if(isset($_POST['enviar'])){


        if($nome === $_SESSION['name'] && $senha === $_SESSION['senha']){
            
            // Credenciais corretas, redireciona para a página home
            $_SESSION['name'] = $nome; // Armazena o nome de usuário na sessão
            header('Location: http://localhost/mymp3/app/views/pages/home.php');
            exit;

        }else{
            header('Location: http://localhost/mymp3/app/views/pages/login.php');
            exit;
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/mymp3/app/views/styles/loginstyle.css"/>
    <style>
        body{
            font-family: 'Montserrat', Arial, sans-serif;
            background-color: black;
            color: white;
        }
        .loginbox{
            background-color: black;
            width: 70%;
            height: 70%;
            margin-top: 7%;
            align-items: center;
            padding: 2%;
        }
        img{
            pointer-events: none; 
        }
        h2{
            color: #FF0099;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            text-shadow: 0 0 0.15em #FF0099;
            user-select: none;
            white-space: nowrap;
            filter: blur(0.007em);
            animation: shake 2.5s linear 
        }
        .texto{
            margin-top: 1%;
            margin-bottom: 1%;
            outline: 0;
        }
        .enviar{
            border-radius: 20px;
            width: 20%;
            margin-top: 3%;
            background-color: #FF0099;
            color: white;
            border: 0;
        }
        .enviar:hover{
            transition: 0.5s;
            background-color: white;
            color: #FF0099;
        }
        a{
            color: white;
            text-decoration: none;
            margin-top: 10%;
        }
        a:hover{
            transition: 0.5s;
            color: #FF0099;
        }
    </style> 
</head>
<body>
    <center>
    <div class="loginbox">
        <h2>LOGIN</h2>
        <form method="post">
            Nome:
            <input type="text" class="texto"placeholder="Fulano da Silva Junior" name="nome"><br>
            Senha:
            <input type="password" class="texto" placeholder="******" name="senha"><br>
            <input type="submit" value="ENVIAR" class="enviar" name="enviar"><br>
        </form>
        
    </div>
    <a href="http://localhost/mymp3/app/views/pages/home.php">Vizualizar como recrutador</a>
    </center>
</body>
</html>
