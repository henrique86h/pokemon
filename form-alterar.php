<?php 
include "cabecalho.php";
include "conexao.php";
$id = $_GET['id'];
$nome = "nome do pokemon";
$tipo = "tipo do pokemon";
$foto = "foto do pokemon";

$sql = "select * from tb_pokemon where id = $id";
$resultado = mysqli_query($conexao, $sql);
while($umPokemon = mysqli_fetch_assoc($resultado)):
    $nome = $umPokemon['nome'];
    $tipo = $umPokemon['tipo'];
    $foto = $umPokemon['foto'];
endwhile;
?>

<h2>Editar Pokemon numero x</h2>
<form method="post" action="atualizar.php?id=<?php echo $id;?>" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="nome" class="form-control" value="<?php echo $nome; ?>">

    <input type="radio" name="tipo" value="normal" class="form-check-input" <?php if($tipo == "normal"){ echo "checked"; }?>> Normal
    <input type="radio" name="tipo" value="fogo" class="form-check-input" <?php if($tipo == "fogo"){ echo "checked"; }?>> Fogo
    <input type="radio" name="tipo" value="agua" class="form-check-input" <?php if($tipo == "agua"){ echo "checked"; }?>> Água
    <input type="radio" name="tipo" value="grama" class="form-check-input" <?php if($tipo == "grama"){ echo "checked"; }?>> Grama
    <input type="radio" name="tipo" value="voador" class="form-check-input">Voador
    <br>
    Foto: <input type="file" name="foto" class="form-control">
    <br>
    <img src="img/<?php echo $foto;?>" alt="<?php echo $foto;?>" class="img-fluid">
    <br>
    <button class="btn btn-primary mt-5" type="submit">Salvar Pokemon</button>


</form>

<?php 
mysqli_close($conexao);
include "rodape.php"; 
?>