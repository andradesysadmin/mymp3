# Mymp3
Meu repositório online de musicas com sistema de playlists/pastas feito em PHP que se integra com Docker (usando uma imagem do xampp como base) e com o Jenkins para deploy automatico<br>
<img src='fotodoprojeto.png'>

## 🤔 Como o sistema funciona

No menu lateral você podera observar 5 ícones, o ícone home é um botão que leva para uma página onde pode você poderá ler uma breve descrição do projeto, abaixo deste está o banco de músicas onde todas as músicas upadas no projeto pela pagina de upload são renderizadas, abaixo deste teremos as playlists onde você terá playlists separadas por genero e poderá também criar suas proprisa playlist personalizada clicando no icone "criar pasta" e upando suas musicas, abaixo do mesmo temos a página responsável por realizar uploads das músicas para o projeto e por fim temos o botão para retornar a página de login

## 💻 Explicando o código

Basicamente a "magica" da aplicação gira entorno de uma função para escanear diretorios e exibir os arquivos contidos nos mesmos em paginas PHP, uma função que efetua upload de arquivos mp3 para dentro de um diretório (que posteriormente serão escaneados pela primeira função e exibidos em uma pagina PHP) e por fim uma função que ira criar um novo diretório (playlist) e uma pagina para exibir os aquivos e realizar uploads dos mesmos, com essas três funções nós temos uma aplicação dinamica que realiza upload de arquivos mp3, armazena, exibe os mesmos para o usuario e ainda os organiza em pastas.

## 📋 Pré-requisitos

A aplicação foi pensada para rodar em containers com Docker, uma vez tendo o docker instalado (sinta-se livre para usar o script de instalação do docker que deixei na raiz do repisotório), com um esse simples comando você já terá a aplicação rodando em seu ambiente:
```
docker run -d -p 8080:80 --name mymp3 andradesysadmin/mymp3:latest
```
A aplicação estará disponivel na porta 8080 com o login e senha **admin**

## ⚙️ Executando os testes

Caso queira testar o upload de arquivos eu deixei um arquivo mp3 nos arquivos do projeto: <a href="https://github.com/andradedevweb/mymp3/blob/main/audio.mp3">clique aqui para acessar</a>

Você pode ir na pagina de playlists e testar o sistema de criação de playlists/pastas, inserir musicas nas playlists/banco de musicas ou simplesmente ouvir as as musicas já incluidas no sistema.

## 🛠️ Construído com

* [PHP](https://www.php.net/) - Linguagem usada
* [Docker](https://www.docker.com/) - Container engine usada
* [Jenkins](https://www.jenkins.io/) - Servidor de automação CI/CD
* [Bootstrap](https://getbootstrap.com/) - Framework frontend usado
* [Xampp](https://www.apachefriends.org/pt_br/index.html) - Servidor local usado
* [VsCode](https://code.visualstudio.com/) - Editor de código usado
