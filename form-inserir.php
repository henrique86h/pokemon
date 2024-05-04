<?php include "cabecalho.php"; ?>

<h2>Cadastrar um novo Pokemon</h2>
<form method="post" action="salvar.php" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="nome" class="form-control">
    <input type="radio" name="tipo" value="normal" class="form-check-input">Normal
    <input type="radio" name="tipo" value="fogo" class="form-check-input">Fogo
    <input type="radio" name="tipo" value="agua" class="form-check-input">Água
    <input type="radio" name="tipo" value="grama" class="form-check-input">Grama
    <input type="radio" name="tipo" value="voador" class="form-check-input">Voador
    <br>
    Foto: <input type="file" name="foto" class="form-control">
    <br>
    <button class="btn btn-primary" type="submit">Salvar Pokemon</button>


</form>

<?php include "rodape.php"; ?>