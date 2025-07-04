<?php
include "cabecalho.php";
?>

<nav class="menu-princial">
    <a href="#" class="item-menu">Livros</a>
    <a href="#" class="item-menu">Contato</a>
    <a href="#" class="item-menu">Recentes</a>
    <a href="#" class="item-menu">QuemSomos</a>
</nav>
<div class="livrologo">
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
<div class="livrologo">
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