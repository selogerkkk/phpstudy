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
    $value1 = $_GET['valor1'] ?? 0;
    $value2 = $_GET['valor2'] ?? 1;
    $quociente = $value1 / $value2;
    $resto = $value1 % $value2;
    ?>
    <h1>Anatomia de uma divisão</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="valor1">Dividendo</label>
        <input type="number" name="valor1" value="<?php $value1 ?>">
        <label for="valor1">Divisor</label>
        <input type="number" name="valor2" value="<?php $value2 ?>">
        <input type="submit" value="Analisar">
    </form>
</section>
<section>
    <h2>Estrutura da divisão:</h2>
    <p>Dividendo: <?php echo $value1; ?><br>
        Divisor: <?php echo $value2; ?><br>
        Quociente: <?php echo $quociente ?><br>
        Resto: <?php echo $resto ?><br>
    </p>
</section>

<body>
</body>