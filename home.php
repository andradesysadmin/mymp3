<?php
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        *{
            padding: 0%;
            margin: 0%;
            font-family: "Times New Roman", Times, serif;
        }
        body{
            font-family: 'Montserrat', Arial, sans-serif;
            background-color: black;
            padding: 0;
            color: white;
        }
        .Box{
            margin-top: 4%;
            margin-bottom: 4%;
            border: 1px white solid;
            width: 70%;
            height: 70%;
        }
        .Box:hover{
            color: black;
            background-color: white;
        	transition: 0.5s;
            transform: scale(1.1)
        }
        .container{
            z-index: 2;
        }
        h1{
            margin-top: 4%;
            margin-bottom: 4%;
            font-size: 180%;
        }
        img{
            margin-top: 10%;
            margin-bottom: 3%;
            width: 30%;
        }
        p{
            width: 60%;
            text-align: center;
            margin-bottom: 5%;
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
            <img src="../imgs/logo.png" alt="Logo">

            <div class="Box">
                <h1>História do projeto 📝</h1>
                <p>Como um bom programador sempre gostei de passar longas horas em frente ao computador programando e ouvindo meus artistas favoritos, porém as plataformas de música online me trouxeram diversas frustrações, sejam quantidades massivas de anúncios, mensalidade abusivas para remover os mesmos ou simplesmente meus artistas favoritos estarem em plataformas diferentes. Inicialmente tive a ideia de baixar minhas músicas favoritas e colocar em uma pasta em meu computador pessoal, porém, ainda não poderia ouvir meus artistas favoritos nos computadores da universidade ou enquanto programo no escritório, considerando todos esses pontos tive a ideia de unir meu amor a programação ao meu amor pela música e criei esse repositório online onde tenho a possibilidade de armazenar e ouvir minhas musicas de onde eu desejar</p>
           </div>
            <div class="Box">
                <h1>Funcionamento ⚙️</h1>
                <p>No menu lateral a sua esquerda você podera observar 5 ícones, o ícone home é um botão que leva para a página em que você está no momento onde pode ler uma breve descrição do projeto, abaixo deste está o banco de músicas onde todas as músicas upadas no projeto são renderizadas, abaixo deste teremos as playlists onde as músicas são separadas por gênero, abaixo do mesmo temos a página responsável por realizar uploads das músicas para o projeto e por fim temos o botão para retornar a página de login</p>
            </div>
        </div>
        <?php include '../includes/sidebar.php'; ?>
    
</body>
</html>