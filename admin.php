<?php include "cabecalho.php"; ?>
<h2>Ambiente administrativo</h2>
<a href="form-inserir.php" class="btn btn-primary mt-5 mb-3">Novo Pokemon</a>

<?php include "conexao.php"; ?>
<table class="table mt-4">
    <thead>
        <tr>
            <th>Número</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select * from tb_pokemon";
        $resultado = mysqli_query($conexao, $sql);
        while($umPokemon = mysqli_fetch_assoc($resultado)):
        ?>
            <tr>
                <td><?php echo $umPokemon['id'];?></td>
                <td><?php echo $umPokemon['nome'];?></td>
                <td><?php echo $umPokemon['tipo'];?></td>
                <td>
                    <a href="form-alterar.php?id=<?php echo $umPokemon['id'];?>">Editar</a>
                    <a href="excluir.php?id=<?php echo $umPokemon['id'];?>">Excluir</a>
                    <a href="visualizar.php?id=<?php echo $umPokemon['id'];?>">Ver</a>
                </td>
            </tr>
        <?php
        endwhile; 
        mysqli_close($conexao);
        ?>
    </tbody>
</table>

<?php include "rodape.php"; ?>