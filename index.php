<?php
include 'Cookies.php';
$usuarioAtual = getUsuarioCookie();
$usuarioLogado = ($usuarioAtual !== null);
?>
<!DOCTYPE html>
<html lang="pt">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cookies.css"/>
</head>
<body>
        <div class="sseccao-de-cookies" id="sseccao-de-cookies">
            <div  class="aviso-de-cookie">
            <img src="imagens/mario-rosto.png">
                <div class="ck-tt">
                    <h3>Aviso de Cookies</h3>
                </div>            
                    <form method="post" action="index.php">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" value="<?= $usuarioAtual ?>">
                <?php if ($usuarioLogado) : ?>
                    <button class="btn-button"type="submit" name="definirCookie">Editar</button>
                <?php else : ?>
                    <button class="btn-button" type="submit" name="definirCookie">Definir</button>
                <?php endif; ?>
            </form>
            <?php if ($usuarioLogado) : ?>
                <p>Bem-vindo de volta, <?= $usuarioAtual ?></p>
            <?php else : ?>
                <p>Bem-vindo(a)</p>
            <?php endif; ?>
                <a  href="javascript:void(0)" onclick="aceiteicookies()">Aceitar Cookies</a>
                <form method="post" action="index.php">
                <?php if ($usuarioLogado) : ?>
                <?php endif; ?>
            </form>
            </div>
        </div>
  
    <h1> <strong>Conheça o super mario:</strong> </h1>
	
	<h2>Super mario maker 2 é anunciado para Nintendo Switch</h2>
		<img class="UN" src="imagens/princesa-mario.webp">	
		<p>Super Mario Maker 2 é a sequência do jogo original do Nintendo Wii U que está em desenvolvimento exclusivamente para Nintendo Switch. Anunciado nesta quarta-feira (13), o jogo será lançado em junho de 2019 e promete oferecer ferramentas para que os jogadores criem as fases de Super Mario Bros. dos sonhos, contemplando muito mais itens e possibilidades em relação ao título anterior.
		O trailer de revelação mostra que será possível criar ladeiras pela primeira vez na franquia. Também foi apresentada a possibilidade dos jogadores utilizarem o Lucky Bell, item vindo de Super Mario 3D World que concede uma roupa de gato aos personagens e que permite escalar paredes e atacar os inimigos com mais facilidade.

	<h2>Má notícia: “Mario Kart Tour” mobile tem microtransações</h2>
		<img class="UN" src="imagens/marios.jpg">	
		<p>Depois de “Mario Run”, “Mario Kart Tour” deve ser o maior jogo para celular da Nintendo. O amado kart racer é reconhecido em todo o mundo, o que faz de sua estréia em dispositivos móveis um grande negócio para um desenvolvedor que ainda tenta entender como fazer jogos free-to-play. Atualmente, ele está em fase beta no Android.
		Pessoalmente, sou um jogador do iOS, então, ainda não consegui testar. Mas as primeiras análises já chegaram, e elas são cautelosas, para dizer o mínimo: “Mario Kart Tour” parece ser uma adaptação decente do conceito “Mario Kart” para o celular, mas é um jogo free-to-play em sua essência, com o tipo de microtransações que o governo dos EUA quer regulamentar.

	<h2>Criadores de super mario run farão novo game mobile de pokémon</h2>
		<img class="UN" src="imagens/20220426-super-mario-bros.jpeg">	
		<p>Quem curte jogar no celular provavelmente já ouviu falar na DeNA. Caso não saiba que companhia é essa, ela foi a responsável por desenvolver Super Mario Run, e pelo visto já está se preparando para um novo projeto: um game estrelado pelos simpáticos pokémons.
		A informação foi revelada durante uma reunião para falar sobre os resultados da empresa para o ano fiscal de 2018, onde houve a menção de que a DeNA vai trabalhar em conjunto com a The Pokémon Company para desenvolver o que eles consideram “um novo e empolgante” jogo estrelado por Pikachu e companhia.

	<h2>Yoshi levava socos de Mário e outros assuntos que agitaram as redes nesta sexta</h2>
		<img class="UN" src="imagens/dino-mario.webp">	
		<p>Muitos fãs da série de jogos de videogame Super Mario World se questionavam se o protagonista batia ou não na cabeça de Yoshi para que ele pegasse itens com a língua. Em entrevista ao portal Kotaku, dois desenvolvedores do jogo confirmaram que a ideia original era que fossem desferidos socos do Mario contra Yoshi para que ele se assustasse, colocasse a língua para fora e pegasse os itens que apareciam em sua frente. 
		Muitas pessoas acham que Mario está apontando o dedo para frente, dizendo 'vá', então a língua de Yoshi sai. (...) No entanto, a configuração original que desenhei é Mario socando Yoshi na cabeça, com a língua do personagem disparando pela surpresa — explica o desenvolvedor  Shigefumi Hino.
		
	<h2>André pase: nintendo aposta em games de Luigi</h2>
		<img class="UN" src="imagens/mariobross-filme.jpg">	
		<p>Para a Nintendo, 2013 é o ano do Luigi. O irmão de Mario ganhou mais atenção, rendendo o bom Luigis Mansion 2 para o 3DS meses atrás. A celebração se encerra com New Super Luigi U para o Wii U e Mario & Luigi: Dream Team para o portátil.
		Com o fim oficial do Wii na semana passada, a Nintendo segue seu dilema de conseguir emplacar o Wii U. Enquanto poucos jogos diferentes surgem - um problema para a empresa -, as apostas recaem sobre personagens antigos, em virtude do apelo com o público.
  
  </div>

  
  <script src="cookies.js"></script>

</body>
</html>