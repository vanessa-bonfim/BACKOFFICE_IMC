<?php

$query = 'SELECT * FROM cadastros';
$sql = $pdo->prepare($query);

if ($sql->execute()) {
    $cadastros = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $cadastros = [];
}

?>

<div class="page">
    <h2>Lista de Cadastrados</h2>
    <div class="horizontal-line"></div>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>NOME</th>
            <th>IDADE</th>
            <th>ALTURA</th>
            <th>PESO</th>
        </tr>
        <?php foreach ($cadastros as $cadastro) : ?>
            <tr>
                <td><?php echo $cadastro['id'] ?></td>
                <td><?php echo $cadastro['name'] ?></td>
                <td><?php echo $cadastro['age'] ?></td>
                <td><?php echo $cadastro['height'] ?>m</td>
                <td><?php echo $cadastro['weight'] ?>Kg</td>

            </tr>
        <?php endforeach ?>
    </table>
</div>