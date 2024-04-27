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

// Exemplo de uso:
$playlist = new Playlist("../../views/pages/playlists");
$playlist->listarPlaylists();
?>
