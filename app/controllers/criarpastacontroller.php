<?php
class CriarPasta{
    public function criar($nomeDaPasta) {

        mkdir("../../../models/$nomeDaPasta/", 0777, true);
        $conteudo = file_get_contents('../conteudonovapasta.php');
        file_put_contents("$nomeDaPasta.php", $conteudo);

    }
}

if(isset($_POST['enviar'])){

    $criadorDePasta = new CriarPasta();
    $nomeDaPasta = $_POST['nomedapasta'];
    echo "<script type='text/javascript'>alert('Enviado!')</script>";
    $criadorDePasta->criar($nomeDaPasta);
}
?>
