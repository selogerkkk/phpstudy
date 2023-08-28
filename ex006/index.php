<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/phpstudy/style.css">
</head>
<section>
    <main>
        <?php
        $anonascimento = $_GET['anonascimento'] ?? 0;
        $anobusca = date('Y');
        $diff = $anobusca - $anonascimento;
        ?>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="anonascimento">Em que ano você nasceu?</label>
            <input type="number" name="anonascimento" value="<?= $anonascimento ?>" step="0.01" required>
            <label for="peso1">Quer saber sua idade em que ano? (atualmente estamos no ano
                <strong><?= $anobusca ?></strong>)</label>
            <input type="number" name="anobusca" value="<?= $anobusca ?>" required>

            <input type="submit" value="Calcular">
        </form>
    </main>
</section>
<section>
    <h2>Resultado:</h2>
    <p> Quem nasceu em <?= $anonascimento ?> vai ter <?= $diff ?> anos em <?= $anobusca ?>! </p>


</section>

<body>
</body>