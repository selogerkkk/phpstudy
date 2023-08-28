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
    $numero = $_GET['numero'] ?? 0;
    // $sqrt = pow($numero, 1 / 2);
    $sqrt = number_format(pow($numero, 1 / 2), 2, ",", ".");
    $cubic = number_format(pow($numero, 1 / 3), 2, ",", ".");
    ?>
    <h1>Informe um número</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="numero">Número</label>
        <input type="number" name="numero" value="<?= $numero ?>" step="0.01">
        <input type="submit" value="Calcular">
    </form>
</section>
<section>
    <h2>Resultado final:</h2>
    <p>Analisando o <strong>número <?= $numero ?></strong>, temos: </p>
    <ul>
        <li>A sua raiz quadrada é <strong><?= $sqrt ?></strong>
        </li>
        <li>A sua raiz cúbica é <strong><?= $cubic ?></strong></li>
    </ul>
</section>

<body>
</body>