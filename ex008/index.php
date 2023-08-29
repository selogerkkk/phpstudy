<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/phpstudy/style.css">
</head>

<body>
    <section>
        <main>
            <?php
            $total = $_GET['total'] ?? 0;
            $sobra = $total;

            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;

            $dias = (int)($sobra / 86400);
            $sobra = $sobra % 86400;

            $horas = (int)($sobra / 3600);
            $sobra = $sobra % 3600;

            $minutos = (int)($sobra / 60);
            $sobra = $sobra % 60;

            $segundos = $sobra;
            ?>
            <h1>Qual é o total de segundos</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="precoatual">Qual é o total de segundos?</label>
                <input type="number" name="total" id="total" value="<?= $total ?>">


                <input type="submit" value="Calcular">
            </form>
        </main>
    </section>
    <section>
        <h2>Totalizando tudo</h2>
        <ul>
            <li><?= $semana ?> semanas</li>
            <li><?= $dias ?> dias</li>
            <li><?= $horas ?> horas</li>
            <li><?= $minutos ?> minutos</li>
            <li><?= $segundos ?> segundos</li>
        </ul>

    </section>
</body>