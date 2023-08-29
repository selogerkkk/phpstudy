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
            $valoratual = $_GET['valoratual'] ?? 0;
            $valorpercent = $_GET['valorpercent'] ?? 0;
            $valorreajuste = $valoratual + (($valoratual * $valorpercent) / 100);
            ?>
            <h1>Reajustador de preços</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="precoatual">Preço do produto (R$)</label>
                <input type="number" name="valoratual" id="valoratual" value="<?= $valoratual ?>">
                <label for="valorpercent">Qual será o percentual de reajuste? (<strong><span
                            id="valorpercentr"><?= $valorpercent ?></span></strong>%)</label>
                <input type="range" name="valorpercent" id="valorpercent" min="0" max="100" step="1"
                    oninput="mudarvalor()" value="<?= $valorpercent ?>">

                <input type="submit" value="Calcular">
            </form>
        </main>
    </section>
    <section>
        <h2>Resultado do reajuste</h2>
        <p>O produto que custava R$<?= $valoratual ?>, com <strong><?= $valorpercent ?>% de aumento</strong> vai passar
            a custar R$<?= $valorreajuste ?> a partir de agora.</p>

    </section>
    <script>
    function mudarvalor() {
        valorpercentr.innerText = valorpercent.value;
    }
    </script>
</body>