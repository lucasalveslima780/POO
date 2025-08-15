<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Steam Games <br>";
    class Jogos {
        public $titulo;
        public $desenvolvedora;
        public $genero;
        public $preco;
        public $multi_jogador;
    }

    $jogo1 = new Jogos();
    $jogo1 -> titulo = "Resident Evil";
    $jogo1 -> desenvolvedora = "Capcom";
    $jogo1 -> genero = "Terror";
    $jogo1 -> preco = "249,90";
    $jogo1 -> multi_jogador = "Não";
    echo "Jogo 1: " . $jogo1->titulo . " - " . $jogo1->desenvolvedora . " - " . $jogo1->genero . " - " . $jogo1->preco . " - Multiplayer: " . $jogo1->multi_jogador . "<br><br>";
    

    $jogo2 = new Jogos();
    $jogo2 -> titulo = "Silent Hill";
    $jogo2 -> desenvolvedora = "Konami";
    $jogo2 -> genero = "Terror";
    $jogo2 -> preco = "349,90";
    $jogo2 -> multi_jogador = "Não";
    echo "Jogo 2: " . $jogo2->titulo . " - " . $jogo2->desenvolvedora . " - " . $jogo2->genero . " - " . $jogo2->preco . " - Multiplayer: " . $jogo2->multi_jogador . "<br><br>";

    $jogo3 = new Jogos();
    $jogo3 -> titulo = "League Of Legends";
    $jogo3 -> desenvolvedora = "RIOT";
    $jogo3 -> genero = "MOBA";
    $jogo3 -> preco = "00,00";
    $jogo3 -> multi_jogador = "Sim";
    echo "Jogo 3: " . $jogo3->titulo . " - " . $jogo3->desenvolvedora . " - " . $jogo3->genero . " - " . $jogo3->preco . " - Multiplayer: " . $jogo3->multi_jogador . "<br><br>";
        
    $jogo4 = new Jogos();
    $jogo4 -> titulo = "Tony Hawks";
    $jogo4 -> desenvolvedora = "Activision";
    $jogo4 -> genero = "Esporte";
    $jogo4 -> preco = "109,90";
    $jogo4 -> multi_jogador = "Sim";
    echo "Jogo 4: " . $jogo4->titulo . " - " . $jogo4->desenvolvedora . " - " . $jogo4->genero . " - " . $jogo4->preco . " - Multiplayer: " . $jogo4->multi_jogador . "<br><br>";

    $jogo5 = new Jogos();
    $jogo5 -> titulo = "Call Of Duty 5";
    $jogo5 -> desenvolvedora = "Treyarch";
    $jogo5 -> genero = "Ação";
    $jogo5 -> preco = "199,80";
    $jogo5 -> multi_jogador = "Sim";
    echo "Jogo 5: " . $jogo5->titulo . " - " . $jogo5->desenvolvedora . " - " . $jogo5->genero . " - " . $jogo5->preco . " - Multiplayer: " . $jogo5->multi_jogador;
    ?>
    
</body>
</html>