<div class="row">
    <h4 class="identificacao">Bem vindo: <?= $_SESSION['nome'] ?></h4>
</div>
<div class="row">
    <div class="col d-flex justify-content-between">
        <div>
            <a href="./usuario.php" class="mx-1 btn btn-roxo select">Filmes</a>
            <a href="#" class="mx-1 btn btn-roxo">Cad. Filme</a>
            <a href="./usuario.php?tipo=usuario" class="mx-1 btn btn-roxo">Usuarios</a>
            <a href="#" class="mx-1 btn btn-roxo">Cad. Usuario</a>
            <a href="#" class="mx-1 btn btn-roxo">Config</a>
        </div>
        <a href="./usuario.php?sair=true" class="btn btn-roxo">Sair</a>
        <!-- antes da ? é o caminho do arquivo depois é o caminho das variáveis -->
    </div>
</div>