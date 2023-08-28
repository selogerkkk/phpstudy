<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/phpstudy/style.css">
</head>
<section>
    <?php
    $valor1 = $_GET['valor1'] ?? 0;
    $valor2 = $_GET['valor2'] ?? 1;
    $peso1 = $_GET['peso1'] ?? 0;
    $peso2 = $_GET['valor2'] ?? 0;
    $media = number_format($valor1 / $valor2, 2, ',', '.');
    $mediaponderada = number_format(($valor1 * $peso1) / ($valor2 * $peso2), 2, ',', '.');
    ?>
    <h1>Informe um número</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="valor1">1º Valor</label>
        <input type="number" name="valor1" value="<?= $valor1 ?>" step="0.01" required>
        <label for="peso1">1º Peso</label>
        <input type="number" name="peso1" value="<?= $peso1 ?>" step="0.01">
        <label for="valor2">2º Valor</label>
        <input type="number" name="valor2" value="<?= $valor2 ?>" step="0.01" required>
        <label for="peso2">2º Peso</label>
        <input type="number" name="peso2" value="<?= $peso2 ?>" step="0.01">
        <input type="submit" value="Calcular">
    </form>
</section>
<section>
    <h2>Cálculo das médias:</h2>
    <p>Analisando os valores <?= $valor1 ?> e <?= $valor2 ?>: </p>
    <p>Temos a média simples: <?= $media ?></p>
    <p>Temos a média ponderada: <?= $mediaponderada  ?></p>

</section>

<body>
</body>