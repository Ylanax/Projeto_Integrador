<?php
include "cabecalho.php";
?>
    <nav class="menu-princial">
    <a href="#livros" class="item-menu">Livros</a>
    <a href="#contato" class="item-menu">Contato</a>
    <a href="#curiosidades" class="item-menu">Curiosidades</a>
    <a href="#quem-somos" class="item-menu">QuemSomos</a>
</nav>
<div id="livros" class="livrologo">
    <h2 class="livroletra">Livros</h2>
</div>



<div class="container-fluid">
    <div class="row">
        <?php
        include "conexao.php";

        $sql = "select * from livros";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>

            <div class="col-3 mb-5 ">
                <div class="card bg-white text-white h-100" style="width: 15rem;">
                    <img src=<?= $linha['foto']; ?> class="">
                    <div class="card-body">
                        <h4 class="card-title fw-bold text-center mb-3 text-black"><?= $linha['titulo']; ?></h4>
                        <a href="livros.php?id=<?= $linha['id']; ?>" class="btn btn-dark d-flex justify-content-center fw-semibold">Detalhes</a>
                    </div>
                </div>
            </div>
            </nav>
        <?php
        }
        mysqli_close($conexao);
        ?>
    </div>
</div>

<div id="curiosidades" class="curiosidades-livro">
    <h2 class="curio-livro">Curiosidades</h2>
</div>

<div class="row">
    <div class="col-6">
        <img src="imagens/bela.jpg" class="img-fluid mt-5 img-bela">
    </div>
    <div class="col-6 align-content-center">
        <h2 class="fw-bold text-black titulo-bela mb-3">A Bela e a Fera</h2>
        <p class="fw-semibold text-black texto-bela">É provável que todos vocês já tenham ouvido falar do clássico da literatura mundial que conta a história da jovem camponesa que para salvar o pai da morte, decide se casar com uma fera muito feia, mas com o coração super bondoso... Essa é, em poucas palavras, a história do livro A Bela e a Fera, que ganhou uma edição super especial da Zahar e agora compõe a coleção Clássicos Zahar.
            A obra ficou muito famosa no ano de 1756, quando Madame Beaumont publicou uma versão curta e infantil para a história que na verdade foi escrita por Madame de Villeneuve, no ano de 1740, tendo como público alvo os adultos.
        </p>
        <ul class="fw-semibold text-black mt-3 texto-bela">
            <li class="mb-3">1. A versão mais famosa de "A Bela e a Fera" foi escrita por Jeanne-Marie Leprince de Beaumont em 1756, mas a história original foi escrita por Gabrielle-Suzanne Barbot de Villeneuve e publicada em 1740, com mais de 300 páginas. </li>
            <li class="mb-3">2. O conto pode ter sido inspirado na história de Petrus Gonsalvus, um homem com hipertricose que viveu no século XVI e se casou com uma mulher bela. </li>
            <li class="mb-3">3. A versão original de "A Bela e a Fera" tem diferenças em relação à animação da Disney. Por exemplo, os amigos de Bela no castelo são macacos e pássaros, não os objetos encantados como Lumière e Cogsworth, e o feitiço é feito por uma fada, não uma bruxa má. </li>
            <li class="mb-3">4. A animação da Disney enfatiza o amor de Bela pela leitura, algo que não é tão presente na versão original do conto. </li>
            <li>5. A versão de Beaumont omitiu alguns elementos da história original, especialmente os de teor erótico, e romantizou o conto para um público mais jovem. </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-6 align-content-center">
            <h2 class="fw-bold text-black titulo-principe mb-3">O Pequeno Príncipe</h2>
            <p class="fw-semibold text-black texto-principe">Escrito pelo francês Antoine de Saint-Exupéry e publicado pela primeira vez em 1943, o livro virou obra de cabeceira para leitores de diferentes gerações, sendo traduzido para mais de 500 idiomas ao redor do globo.
                A trama segue um piloto de avião que faz um pouso forçado no Saara, onde encontra um garoto de cabelos dourados, que vestido como um príncipe, diz ter vindo de um mundo distante. Enquanto os dois lutam para não enlouquecer de sede no deserto, o menino conta histórias das muitas viagens que fez pelo universo em busca das coisas mais importantes da vida.
            </p>
            <ul class="fw-semibold text-black mt-3 texto-principe">
                <li class="mb-3">1. Antoine de Saint-Exupéry, o escritor do Pequeno Príncipe era um conde. O escritor do Pequeno Príncipe tinha um nome longuíssimo: Antoine Jean-Baptiste Marie Roger Foscolombe e tinha um título de nobreza que lhe conferia o status de Conde de Saint-Exupéry. No final das contas chamavam-no de Antoine de Saint-Exupéry ou, para os íntimos, Tonio apenas. Ele era um conde, mas trabalhava como aviador contratado para fazer entregas postais.</li>
                <li class="mb-3">2. A obra O Pequeno Príncipe só existiu por causa de uma pane no avião de Antoine. No ano novo de 1936, o avião que Antoine de Saint-Exupéry pilotava, autor do Pequeno Príncipe, caiu no deserto do Saara e ele passou quatro dias sofrendo de desidratação, fome, e tendo alucinações, até ser resgatado por um beduíno. A ideia para a história do pequeno príncipe surgiu aí. </li>
                <li class="mb-3">3. Antoine ficou perdido no Saara porque estava atolado em dívidas. </li>
                <li class="mb-3">4. Consuelo, a esposa de Exupéry era a rosa do livro O Pequeno Príncipe. </li>
                <li class="mb-5">5. Antoine pediu sua esposa em casamento horas depois de tê-la conhecido. </li>
            </ul>
        </div>
        <div class="col-6">
            <img src="imagens/principe.jpg" class="img-fluid img-principe">
        </div>
    </div>
</div>

<div id="quem-somos" class="livrologo">
    <h2 class="livroletra">Quem Somos</h2>
</div>
<div class="container">
    <div class="row quem-somos">
        <div class="p-4 coluna">
            <p><strong>Somos duas estudantes do Curso Técnico em Informática e este é o nosso Projeto Integrador.
                    Apresentamos a Biblioteca Virtual:<br>
                    <strong>"Navegantes do Conhecimento - Unindo Gerações"</strong>.
            </p>

            <p>Nosso projeto tem como objetivo principal promover a inclusão literária e o acesso ao conhecimento para pessoas de todas as idades.
                Acreditamos que a leitura pode ser uma ponte entre diferentes gerações, incentivando o aprendizado, a troca de experiências e o desenvolvimento pessoal e coletivo.
            </p>
            <p>A Biblioteca Virtual foi pensada para ser um espaço acessível, interativo e educativo, onde jovens, adultos e idosos possam navegar juntos pelo universo do saber, por meio de livros digitais.
            </p>
            <p>Esperamos que vocês gostem da nossa iniciativa!
                Acompanhem nosso trabalho e nos sigam nas redes sociais para ficar por dentro das novidades!
                "Navegantes do Conhecimento - Unindo Gerações"<br><br>
                <strong>"Navegantes do Conhecimento — Unindo Gerações"</strong><br><br>
                Porque aprender é para todos, em qualquer tempo da vida.
            </p>
        </div>
    </div>
</div>
<div id="contato" class="form-container">
        <h2 class="contato">Contato</h2>
        <form action="https://formspree.io/f/mrblljvj" method="post">
            <label class="form-cont" for="nome">Nome</label>
            <input class="input-cont" type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
    
            <label class="form-cont" for="email">E-mail</label>
            <input class="input-cont" type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>
    
            <label class="form-cont" for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem..." required></textarea>
    
            <button class="botao1 fw-semibold" type="submit">Enviar</button>
        </form>
    </div>

<!-- <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14717.314148677067!2d-47.339393735395944!3d-22.753185769813705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8998174c896b9%3A0x739b7f99b3323574!2sSenac%20Americana!5e0!3m2!1spt-BR!2sbr!4v1753398375369!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

<div class="redes">
    <h2 class="titulo-redes">Siga nas redes sociais </h2>
    <a href="https://facebook.com/" class="a-rede">
        <img src="imagens/facebook.png" class="rede" width="28">
    </a>
    <a href="https://www.instagram.com/navegantes_conhecimento/" class="a-rede">
        <img src="imagens/instagram.png" class="rede" width="28">
    </a>
    <a href="https://www.tiktok.com/login?redirect_url=https%3A%2F%2Fwww.tiktok.com%2Fpt-BR&lang=en&enter_method=mandatory">
        <img src="imagens/tiktok.png" class="rede" width="28" class="a-rede">
    </a>
</div>
<?php include "rodape.php"; ?>