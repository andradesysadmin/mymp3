<?php

//Função para deletar diretorios
function delTree($dir) { 
    $files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) { 
    (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    } 
    return rmdir($dir); 
}

$arquivo = $_FILES['file'];
$nomepastaupload = basename(__FILE__);
@$novonomepastaupload = pathinfo($nomepastaupload, PATHINFO_FILENAME);
$arquivoNovo = explode('.',$arquivo['name']);
$path = "../../../models/$novonomepastaupload/".$arquivo['name'];
$arquivoNome = $arquivo['name'];

if(isset($_POST['acao'])){

    if($arquivoNovo[sizeof($arquivoNovo)-1] != 'mp3'){
        echo "<script type='text/javascript'>alert('O arquivo não é mp3!')</script>";
    }else{
        move_uploaded_file($arquivo['tmp_name'], $path) or die("Não foi possivel realizar o upload!");
        echo "<script type='text/javascript'>alert('Evidado com sucesso!')</script>";
    }

} 

if(isset($_POST['deletar'])){

    $arquivo = $_FILES['file'];
    $nomepastaupload = basename(__FILE__);
    @$novonomepastaupload = pathinfo($nomepastaupload, PATHINFO_FILENAME);
    $arquivoNovo = explode('.',$arquivo['name']);
    $path = "../../../models/$novonomepastaupload/".$arquivo['name'];
    $arquivoNome = $arquivo['name'];
    
    delTree("../../../models/$novonomepastaupload");
    unlink("../../../views/pages/playlists/".basename(__FILE__));
    header('Location: http://localhost:8000/mymp3/app/views/pages/playlist.php');
    exit;

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
            $nomedoarquivo = basename(__FILE__);
            $nomedoarquivonovo = pathinfo($nomedoarquivo, PATHINFO_FILENAME);
            echo $nomedoarquivonovo
            ?></title>
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
            margin-top: 4%;
            margin-bottom: 4%;
        }
        p{
            width: 60%;
            text-align: center;
        }
        .box{
            color: white;
            background-color: rgb(20,20,20);
            border: 1px solid white;
            margin-bottom: 5%;
            padding: 2%;
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
            <h1><strong>
            <?php 
            $nomedoarquivo = basename(__FILE__);
            $nomedoarquivonovo = pathinfo($nomedoarquivo, PATHINFO_FILENAME);
            echo $nomedoarquivonovo
            ?></strong></h1>
            <form action="" method="post" enctype="multipart/form-data" class="upload">
                <center>
                <label><h3>Insira um arquivo mp3 na playlist:</h3></label><br>
                <input type="file" name="file" ><br>
                <input type="submit" name="acao" class="enviar" value="ENVIAR"><br>
                <input type="submit" name="deletar" class="enviar" value="DELETAR PASTA">
                </center>
            </form>

            <?php 
                @$arquivos = scandir("../../../models/$novonomepastaupload");
                unset($arquivos[1]);
                unset($arquivos[0]);

                if(!isset($arquivos)){
                    error_reporting(E_ERROR | E_PARSE);
                }
                if(!isset($novonomepastaupload)){
                    error_reporting(E_ERROR | E_PARSE);
                    unset($arquivos[2]);
                    unset($arquivos[3]);
                    unset($arquivos[4]);
                }

                foreach($arquivos as $arquivo) {
                    echo "
                    <center>
                        <div class='box'>
                        <label>$arquivo</label><br>
                        <audio controls>
                            <source src='../../../models/$novonomepastaupload/".$arquivo."' type='audio/ogg'>
                            Your browser does not support the audio element.
                        </audio>
                        </div>
                    </center>";
                }
    
            ?>

        </div>
</body>
</html>
