<?php

$query = 'SELECT * FROM calculo_imc ORDER BY imc DESC';
$sql = $pdo->prepare($query);

if ($sql->execute()) {
    $calculos = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $calculos = [];
}

/* function IMC($height, $weight)
{
    $height = str_replace(',', '.', $height);
    $height = $height * $height;
    $r = $weight / $height;
    $result = number_format($r, 2);
    return $result;
} */

?>

<div class="page">
    <h2>IMC de cadastrados</h2>
    <div class="horizontal-line"></div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>IMC</th>
            <th>CLASSIFICAÇÃO</th>
        </tr>
        <?php foreach ($calculos as $calculo) : ?>
            <?php if ($calculo['imc'] >= 40.00) {
                $msg = 'Obesidade Grau III';
                $bg_c = 'bg-c6';
            } elseif ($calculo['imc'] > 35 && $calculo['imc'] < 39.99) {
                $msg = 'Obesidade Grau II';
                $bg_c =  'bg-c5';
            } elseif ($calculo['imc'] > 30 && $calculo['imc'] < 34.99) {
                $msg = 'Obesidade Grau I';
                $bg_c =  'bg-c4';
            } elseif ($calculo['imc'] > 25 && $calculo['imc'] < 29.99) {
                $msg = 'Sobrepeso';
                $bg_c =  'bg-c3';
            } elseif ($calculo['imc'] > 18.50 && $calculo['imc'] < 24.99) {
                $msg = 'Peso Normal';
                $bg_c =  'bg-c2';
            } elseif ($calculo['imc'] < 18.50) {
                $msg = 'Abaixo do Peso';
                $bg_c =  'bg-c1';
            }
            ?>
            <tr class="<?php echo $bg_c; ?> ">
                <td><?php echo $calculo['id'] ?></td>
                <td><?php echo $calculo['name'] ?></td>
                <td><?php echo number_format($calculo['imc'], 1) ?></td>
                <td><?php echo $msg; ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>