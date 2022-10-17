<?php
if (
    $_SERVER['REQUEST_METHOD'] == 'POST' &&
    (empty($_POST['name']) ||
        empty($_POST['age']) ||
        empty($_POST['height']) ||
        empty($_POST['weight']))
) {

    set_flash_message('Preencha todos os campos!');
    url_redirect(['route' => 'user_cadastrar']);
}

if (!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['height']) && !empty($_POST['weight'])) {

    $query = 'INSERT INTO cadastros (name, age, height, weight) VALUES (?, ?, ?, ?)';

    $sql = $pdo->prepare($query);

    if ($sql->execute([$_POST['name'], $_POST['age'], $_POST['height'], $_POST['weight']])) {
        $message = "Registo criado com sucesso";
    } else {
        $message = "Não foi possível criar o registo, tente novamente";
    }

    set_flash_message($message);
    url_redirect(['route' => 'user_cadastrar']);
}

?>
<div class="page">
    <form class="form" method="POST" action="<?php echo url_generate(['route' => 'user_cadastrar']); ?>">
        <div class="form-group">
            <input placeholder="Nome" type="text" name="name" require>
        </div>
        <div class="form-group">

            <input placeholder="Idade" type="number" name="age" require>
        </div>
        <div class="form-group">

            <input id="decimal" step="0.010" placeholder="Altura (m)" type="" name="height" require>
        </div>
        <div class="form-group">

            <input id="decimal" step="0.010" placeholder="Peso (Kg)" type="" name="weight" require>
        </div>
        <div class="form-group">
            <button>Guardar</button>
        </div>
    </form>
</div>
<script>
    document.getElementById("decimal").addEventListener("change", function() {
        this.value = parseFloat(this.value).toFixed(2);
    });
</script>