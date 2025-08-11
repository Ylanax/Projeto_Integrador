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

        $sql = "select * from livros LIMIT 4";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-3 mb-5 ">
                <div class="card bg-white text-white h-100" style="width: 15rem;">
                    <img src=<?= $linha['foto']; ?> class="">
                    <div class="card-body">
                        <h4 class="card-title fw-bold text-center mb-3 text-black"><?= $linha['titulo']; ?></h4>
                        <a href="sistema/login.php" class="btn btn-dark d-flex justify-content-center fw-semibold">Detalhes</a>
                    </div>
                </div>
            </div>
        <?php
        }
        mysqli_close($conexao);
        ?>
    </div>
</div>

<?php include "rodape.php"; ?>