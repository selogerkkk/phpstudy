<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/phpstudy/style.css">
</head>
<style>
    img.nota {
        height: 50px;
        margin: 5px;
    }
</style>

<body>
    <section>
        <main>
            <?php
            $total = $_GET['total'] ?? 0;
            $resto = $total;

            $total100 = floor($resto / 100);
            $resto %= 100;
            $total50 = floor($resto / 50);
            $resto %= 50;
            $total10 = floor($resto / 10);
            $resto %= 10;
            $total5 = floor($resto / 5);
            $resto %= 5;

            ?>
            <h1>Caixa eletrônico</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="precoatual">Qual valor você deseja sacar?</label>
                <input type="number" name="total" id="total" value="<?= $total ?>">


                <input type="submit" value="Calcular">
            </form>
        </main>
    </section>
    <section>
        <h2>Saque de R$<?= number_format("$total", "2", ",", ".") ?> realizado</h2>
        <ul>
            <li><img src="100-reais.jpg" class="nota" srcset=""><?= $total100 ?> x</li>
            <li><img src="50-reais.jpg" class="nota" srcset=""><?= $total50 ?> x</li>
            <li><img src="10-reais.jpg" class="nota" srcset=""><?= $total10 ?> x</li>
            <li><img src="5-reais.jpg" class="nota" srcset=""><?= $total5 ?> x</li>
        </ul>

    </section>
</body>