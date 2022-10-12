<?php

$query = 'SELECT * FROM cadastros';
$sql = $pdo->prepare($query);

if ($sql->execute()) {
    $cadastros = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $cadastros = [];
}

function IMC($height, $weight)
{
    $height = str_replace(',', '.', $height);
    $height = $height * $height;
    $r = $weight / $height;
    $result = number_format($r, 2);
    return $result;
}
?>

<div class="page">
    <h2>IMC de cadastrados</h2>
    <div class="horizontal-line"></div>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>IMC</th>
            <th>Classificação</th>
        </tr>
        <?php foreach ($cadastros as $cadastro) : ?>
            <tr>
                <td><?php echo $cadastro['id'] ?></td>
                <td><?php echo $cadastro['name'] ?></td>
                <td><?php echo IMC($cadastro['height'], $cadastro['weight']) ?></td>
                <td> <?php if (IMC($cadastro['height'], $cadastro['weight']) >= 40.00) {
                            echo '<p>Obesidade Grau III ou Mórbida</p>';                        
                        } elseif (IMC($cadastro['height'], $cadastro['weight']) > 35 && IMC($cadastro['height'], $cadastro['weight']) < 39.99) {
                            echo '<p>Obesidade Grau II</p>';
                        } elseif (IMC($cadastro['height'], $cadastro['weight']) > 30 && IMC($cadastro['height'], $cadastro['weight']) < 34.99) {
                            echo '<p>Obesidade Grau I</p>';
                        } elseif (IMC($cadastro['height'], $cadastro['weight']) > 25 && IMC($cadastro['height'], $cadastro['weight']) < 29.99) {
                            echo '<p>Sobrepeso</p>';
                        } elseif (IMC($cadastro['height'], $cadastro['weight']) > 18.50 && IMC($cadastro['height'], $cadastro['weight']) < 24.99) {
                            echo '<p>Peso Normal</p>';
                        } elseif (IMC($cadastro['height'], $cadastro['weight']) < 18.50) {
                            echo '<p>Abaixo do Peso</p>';
                        }
                        ?>
                </td>

            </tr>
        <?php endforeach ?>
    </table>
</div>
<script>

    const elementP = document.querySelectorAll('p');
    const elementTd = document.querySelectorAll('td');

    if (elementP.innerText == "Obesidade Grau III ou Mórbida") {
        
    } else if(elementP.innerText == "Obesidade Grau II") {
        
    } else if(elementP.innerText == "Obesidade Grau II") {
        
    } else if(elementP.innerText == "Sobrepeso") {
        
    } else if(elementP.innerText == "Peso Normal") {
        
    } else if(elementP.innerText == "Abaixo do peso") {
        
    }
</script>