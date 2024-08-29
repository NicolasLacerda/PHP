<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 a 100... </p>
        <?php 
            $number = "O valor gerado foi " . rand(1, 100);
            print $number
        ?>
        <p></p>
        <button onclick="window.location.reload()">🤠 Gerar outro</button>
    </section>
</body>

</html>