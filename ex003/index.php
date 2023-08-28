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
    $salario = $_GET['salario'] ?? 0;
    $minimo = 1380.60;
    $equivale = intdiv($salario, $minimo);
    $diff = $salario % $minimo;
    ?>
    <h1>Informe seu salário</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="sal">Salário (R$)</label>
        <input type="number" name="salario" value="<?= $salario ?>" step="0.01">
        <p>Considerando o salário mínimo de <strong>R$<?= $minimo ?></strong></p>
        <input type="submit" value="Calcular">
    </form>
</section>
<section>
    <h2>Resultado final:</h2>
    <p><?php
        print("Quem recebe um salário de $salario ganha <strong> $equivale salários mínimos</strong> + $diff");
        ?>
    </p>
</section>

<body>
</body>