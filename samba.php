<?php

if(isset($_POST['acao'])){
            
    $arquivo = $_FILES['file'];
    $arquivoNovo = explode('.',$arquivo['name']);
    $path = "../../../models/playlists_uploads/samba/".$arquivo['name'];
    $arquivoNome = $arquivo['name'];

    if($arquivoNovo[sizeof($arquivoNovo)-1] != 'mp3'){
        echo "<script type='text/javascript'>alert('O arquivo não é mp3!')</script>";
    }else{
        move_uploaded_file($arquivo['tmp_name'], $path) or die("Não foi possivel realizar o upload!");
        echo "<script type='text/javascript'>alert('Evidado com sucesso!')</script>";
    }

} 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samba</title>
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
        .container{
            z-index: 2;
        }
        svg{

            position: fixed;
            margin-top: 2%;
        }
        a{
            color: white;
            margin-top: 5%;
            margin-left: 2%;   
        }
        a:hover{
            transition: 0.5s;
            color: #FF0099;
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
        img:hover{
            width: 45%;
            height: 45%;
            transition: 0.5s;
            border-radius: 0%;
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
        .upload{
            padding: 5%;
            width: 80%;
            margin-top: 5%;
            margin-bottom: 5%;
            border: 1px white solid;
            margin-left: 10%;
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
            <h1><strong>Samba</strong></h1>
            <img src="../capa_playlists/samba.jpg">
            <form action="" method="post" enctype="multipart/form-data" class="upload">
                <label><h3>Insira um arquivo mp3 na playlist:</h3></label><br>
                <input type="file" name="file" ><br>
                <input type="submit" name="acao" class="enviar" value="ENVIAR">
            </form>

            <?php 
                $arquivos = scandir("../../../models/playlists_uploads/samba");
                unset($arquivos[1]);
                unset($arquivos[0]);

                foreach($arquivos as $arquivo) {
                    echo "
                    <center>
                        <div class='box'>
                        <label>$arquivo</label><br>
                        <audio controls>
                            <source src='../../../models/playlists_uploads/samba/".$arquivo."' type='audio/ogg'>
                            Your browser does not support the audio element.
                        </audio>
                        </div>
                    </center>";
                }
    
            ?>

        </div>
</body>
</html>