<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Resultado do form</h1>
    </header>
    <main>
        <p>Gerando um número aleatório entre 0 a 100...</p>
        <?php 
            $numero = $_POST["numero"];
            print "Gerando um número aleatório " . $numero; 
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para última página</a></p>

    </main>
</body>

</html>