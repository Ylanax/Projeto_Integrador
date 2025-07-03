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
            
            <div class="col-3 mb-5">
                    <div class="card bg-white text-white h-100" style="width: 15rem;">
                        <img src=<?= $linha['foto']; ?> class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-center mb-3 text-black"><?= $linha['titulo']; ?></h4>
                            <a href="livros.php?id=<?=$linha['id'];?>" class="btn btn-dark d-flex justify-content-center fw-semibold">Detalhes</a>
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