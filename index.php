<?php
$titulo = 'CineBox - Inicio';
include './includes/header.php' ?>

<section id="banner">
    <main class="carrossel-container">
        <div class="carrossel">
            <img src="./assets/img/banner/banner_00.jpg" alt="banner 00">
            <img src="./assets/img/banner/banner_01.jpg" alt="banner 01">
            <img src="./assets/img/banner/banner_02.jpg" alt="banner 02">
            <img src="./assets/img/banner/banner_03.jpg" alt="banner 03">
            <img src="./assets/img/banner/banner_04.jpg" alt="banner 04">
            <img src="./assets/img/banner/banner_05.jpg" alt="banner 05">
        </div>

        <button class="prev" onclick="javascript:voltarSlide()"><i class="bi bi-arrow-left"></i></button>
        <button class="next" onclick="javascript:proximoSlide()"><i class="bi bi-arrow-right"></i></button>
    </main>
</section>
<section id="filmes-recomendados">
    <h2 class="titulo">Filmes</h2>
    <main class="container">
        <div class="row">

        <?php for ($i = 0; $i < 8; $i++) { ?>
            <div class="col col-3">
                <figure>
                    <img src="./assets/img/poster/avatar-o-caminho-da-agua.png"
                        alt="poster do filme avatar o caminho da água" class="foto-produto">
                    <figcaption>
                        <h4>Avatar o Caminho da Água</h4>
                        <span class="preco">R$ 15,90</span>
                        <p class="descricao">Mussum Ipsum, cacilds vidis litro abertis. Admodum accumsan disputationi eu
                            sit. Vide electram sadipscing et per. Per aumento de cachacis, eu reclamis. Paisis, filhis,
                            espiritis santis. Cevadis im ampola pa arma uma pindureta.</p>
                    </figcaption>
                    <span class="genero">
                        <label style="background-color: #070373;">Fantasia</label>
                        <label style="background-color: #580259;">Drama</label>
                        <label style="background-color: #D966BA;">Ficção</label>
                    </span>
                </figure>
            </div>
            <?php } ?>

        </div>
    </main>
</section>