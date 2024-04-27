<?php
class Bancocontroller{
    private $directory;

    public function __construct($directory) {
        $this->directory = $directory;
    }

    public function getFiles() {
        $files = scandir($this->directory);
        unset($files[1]); // Remove o diretório pai (..)
        unset($files[0]); // Remove o diretório atual (.)

        return $files;
    }

    public function mostrarMusicas() {
        $files = $this->getFiles();
        foreach($files as $file) {
            echo "
            <center>
                <div class='box'>
                    <label>$file</label><br>
                    <audio controls>
                        <source src='../../models/uploads/$file' type='audio/ogg'>
                        Seu navegador não suporta o elemento de áudio.
                    </audio>
                </div>
            </center>";
        }
    }
}

?>
