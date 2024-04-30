<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist</title>
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
            width: 100%;
            align-items: center;
            z-index: 2;
            display: inline;
        }
        .folder{
            display: inline-block;
            margin-left: 10%;
            margin-top: 5%;
        }
        a:hover{
            color: #FF0099;
            text-decoration: none;
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
<div class="container">
    <?php 
    class Playlist {
        private $directory;

        public function __construct($directory) {
            $this->directory = $directory;
        }

        public function listarPlaylists() {
            $arquivos = scandir($this->directory);
            $arquivos[0] = '../banco.php';
            $arquivos[1] = '../upload.php';

            foreach($arquivos as $arquivo) {
                $arquivonome = pathinfo($arquivo, PATHINFO_FILENAME);
                echo "
                <a href='../../views/pages/playlists/$arquivo'> 
                    <div class='folder'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='60' height='60' fill='currentColor' class='bi bi-folder' viewBox='0 0 16 16'> <path d='M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z'/></svg>
                        <center> <p>$arquivonome</p></center>
                    </div>
                </a>";
            }
        }
    }

    $playlist = new Playlist("../../views/pages/playlists");
    $playlist->listarPlaylists();
    ?>
</div>
<?php include '../includes/sidebar.php'; ?>
</body>
</html>
