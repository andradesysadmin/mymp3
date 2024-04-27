<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
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
            z-index: 2;
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
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" class="upload">
        <label><h3>Selecione um arquivo mp3 para fazer upload:</h3></label><br>
        <input type="file" name="file" ><br>
        <input type="submit" name="acao" class="enviar" value="ENVIAR">
    </form>
    <?php
    class UploadArquivo {
        public function processarArquivo($arquivo) {
            $arquivoNovo = explode('.', $arquivo['name']);
            $path = "../../models/uploads/" . $arquivo['name'];

            if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'mp3') {
                echo "<script type='text/javascript'>alert('O arquivo não é mp3!')</script>";
            } else {
                move_uploaded_file($arquivo['tmp_name'], $path) or die("Não foi possível realizar o upload!");
                echo "<script type='text/javascript'>alert('Arquivo enviado com sucesso')</script>";
            }
        }
    }

    if (isset($_POST['acao'])) {
        $upload = new UploadArquivo();
        $upload->processarArquivo($_FILES['file']);
    }
    ?>
    <?php include '../includes/sidebar.php'; ?>
</body>
</html>
