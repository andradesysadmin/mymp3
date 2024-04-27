<?php

        include('../../../controllers/criarpastacontroller.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova pasta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        *{
            padding: 0%;
            margin: 0%;
        }
        body{
            font-family: 'Montserrat', Arial, sans-serif;
            background-color: black;
            padding: 0;
            color: white;
        }
        .upload{
            padding: 15%;
            margin-left: 20%;
            align-items: center;
        }
        .enviar{
            margin-top: 3%;
            width: 30%;
            color: white;
            background-color: #FF0099;
            border: 0px white;
            border-radius: 30px;
        }
        .enviar:hover{
            transition: 0.7s;
            color: #FF0099;
            background-color: white;
        }
        .container{
            margin-top: 10%;
            width: 50%;
            align-items: center;
            z-index: 2;
        }
        a{
            color: white;
            margin-top: 10%;
            margin-left: 2%;   
        }
        a:hover{
            transition: 0.5s;
            color: #FF0099;
        }
        svg{
            margin-top: 2%;
        }
        .enviar{
            margin-top: 3%;
            width: 30%;
            color: white;
            background-color: #FF0099;
            border: 0px white;
            border-radius: 30px;
        }
        .input{
            border-radius: 0%;
            border: 0;
            outline: 0;
        }
        .enviar:hover{
            transition: 0.7s;
            color: #FF0099;
            background-color: white;
        }
        a:hover{
            color: #FF0099;
        }
        ::-webkit-scrollbar-track {
        background-color: rgb(0, 0, 0);
        }
        ::-webkit-scrollbar {
            width: 8px;
            background: #F4F4F4;
        }
        ::-webkit-scrollbar-thumb {
            background: #dad7d7;
        }
    </style>
</head>
<body>
<a href="../playlist.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/></svg>
    </a>
<center>
<div class="container">
    <form method="post">
        <label><h2><strong>Nome da pasta</strong></h2></label><br>
        <p><i>Insira um nome para sua pasta</i></p>
        <input type="text" name="nomedapasta" class="input"><br>
        <input type="submit" value="ENVIAR" class="enviar" name="enviar"><br>
    </form>
</div>
    </center>
</body>
</html>
