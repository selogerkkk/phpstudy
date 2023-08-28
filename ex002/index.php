<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/phpstudy/style.css">
</head>
<section>
    <!-- calculos -->
    <?php
    $dividendo = $_GET['valor1'] ?? 0;
    $divisor = $_GET['valor2'] ?? 1;
    $quociente = $dividendo / $divisor;
    $resto = $dividendo % $divisor;
    ?>
    <h1>Anatomia de uma divisão</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="valor1">Dividendo</label>
        <input type="number" name="valor1" value="<?= $dividendo ?>">
        <label for="valor1">Divisor</label>
        <input type="number" name="valor2" value="<?= $divisor ?>">
        <input type="submit" value="Analisar">
    </form>
</section>
<section>
    <h2>Estrutura da divisão:</h2>
    <p>Dividendo: <?php echo $dividendo; ?><br>
        Divisor: <?php echo $divisor; ?><br>
        Quociente: <?php echo $quociente ?><br>
        Resto: <?php echo $resto ?><br>
    </p>
    <table class="divisao">
        <tr>
            <td><?= $dividendo ?></td>
            <td><?= $divisor ?></td>
        </tr>
        <tr>
            <td><?= $quociente ?></td>
            <td><?= $resto ?></td>
        </tr>
    </table>
</section>

<body>
</body>