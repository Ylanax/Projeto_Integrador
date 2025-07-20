<?php
include "cabecalho.php";
?>

<nav class="menu-princial">
    <a href="#livros" class="item-menu">Livros</a>
    <a href="#" class="item-menu">Contato</a>
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
                    <img src=<?= $linha['foto']; ?> class="card-img-top">
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

<div class="curiosidades-livro">
    <h2 class="curio-livro">Curiosidades</h2>
</div>

<div class="row">
        <div class="col-6">
            <img src="imagens/bmw.jpg" class="img-fluid mt-5">
        </div>
        <div class="col-6 align-content-center">
            <h2 class="bmw-m4 fw-bold text-black">BMW M4 Coupé</h2>
            <p class="fw-semibold text-black">O motor S55 é baseado no N55, mas com componentes internos reforçados e dois turbos.
                Muita gente faz remap, atingindo facilmente mais de 500 cv com segurança. A BMW M4 F82 é a versão de alto desempenho da Série 4 Coupé, desenvolvida pela divisão BMW M. Lançada em 2014, ela substituiu o BMW M3 Coupé da geração anterior (E92), que fazia parte da Série 3. A partir daí, o M3 ficou apenas como sedã, enquanto o M4 representa o coupé e o conversível.
            </p>
            <ul class="fw-semibold">
                <li>Motor: 3.0 litros, 6 cilindros em linha, TwinPower Turbo (biturbo)</li>
                <li>Potência: Versão padrão: 431 cv (425 hp) @ 5.500–7.300 rpm.</li>
                <li>Torque: 550 Nm (406 lb-ft) @ 1.850–5.500 rpm.</li>
                <li>Transmissão: Manual de 6 marchas / Automática de dupla embreagem (DCT) de 7 marchas (opcional).</li>
                <li>Performance (M4 padrão): 0–100 km/h: ~4,1 segundos (com DCT) // Velocidade máxima: 250 km/h (limitada eletronicamente).</li>
            </ul>
            <a href="https://www.bmw.com.br/pt/all-models/m-series/bmw-4-series-m-models/bmw-m4-coupe.html#dados-tecnicos" class="btn btn-dark fw-semibold">Saiba Mais</a>
        </div>
    </div>

<div id="quem-somos" class="livrologo">
    <h2 class="livroletra">Quem Somos</h2>
</div>
<div class="container my-5">
  <div class="row quem-somos">
    <div class="col-md-6 p-4 coluna">
            <p><strong>Somos duas estudantes do Curso Técnico em Informática e este é o nosso Projeto Integrador.
                    Apresentamos a Biblioteca Virtual:<br>
                    <strong>"Navegantes do Conhecimento - Unindo Gerações"</strong>.
            </p>

            <p>Nosso projeto tem como objetivo principal promover a inclusão literária e o acesso ao conhecimento para pessoas de todas as idades.
                Acreditamos que a leitura pode ser uma ponte entre diferentes gerações, incentivando o aprendizado, a troca de experiências e o desenvolvimento pessoal e coletivo.
            </p>
        </div>
        <div class="col-md-6 p-4 coluna">
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

<?php include "rodape.php"; ?>