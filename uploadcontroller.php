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