<?php
include "cabecalho.php";
include "conexao.php";

$id = $_GET["id"];
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
<h2>Visualizando pokemon número <?php echo $id;?> </h2>
<div class="row">
    <div class="col">
        <img src="img/<?php echo $foto;?>" alt="<?php echo $foto;?>" class="img-fluid">
    </div>
    <div class="col">
        <h3><?php echo $nome;?></h3>
        <h4><?php echo $tipo;?></h4>
    </div>
</div>
<?php
mysqli_close($conexao);
include "rodape.php";
?>