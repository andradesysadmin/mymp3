<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de músicas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        *{
            padding: 0%;
            margin: 0%;
            font-family: "Times New Roman", Times, serif;
        }
        body{
            background-color: black;
            padding: 0;
            color: white;
        }
        .container{
            z-index: 2;
        }
        h1{
            margin-left: 5%;
            margin-top: 4%;
            margin-bottom: 4%;
        }
        img{
            margin-top: 3%;
            margin-bottom: 3%;
            width: 40%;
            border-radius: 100%;
        }
        p{
            width: 60%;
            text-align: center;
        }
        .box{
            margin-left: 5%;
            color: white;
            background-color: rgb(20,20,20);
            border: 1px solid white;
            margin-bottom: 5%;
            padding: 2%;
        }
        button{
            color: white;
            background-color: rgb(20,20,20);
            border: 1px solid white;
            outline-offset: 0px;
            outline: none;
        }
        button:hover{
            transition: 0.5s;
            background-color: white;
            color:rgb(0, 0, 0);
        }
        audio{
            width: 80%;
            border-radius: 0%;
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
    <center>
        <div class="container">
            <h1><strong>Banco de músicas</strong></h1>
            <?php
            require "../../controllers/bancocontroller.php"; // Supondo que o arquivo da classe esteja em "AudioFiles.php"

            $arquivoMusica = new Bancocontroller("../../models/uploads");
            $arquivoMusica->mostrarMusicas();
            
            ?>
        </div>
    </center>
    <?php include '../includes/sidebar.php';?>
</body>
</html>
