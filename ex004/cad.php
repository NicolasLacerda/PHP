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
        <?php 
            $nome = $_POST["nome"] ?? "sem nome";
            $snome = $_POST["sobrenome"] ?? "sem sobrenome";
            print "Bem vindo " . $nome . " " . $snome . " prazer em conhece-lo!!!"; 
        ?>
        <br>
        <p><a href="javascript:history.go(-1)">Voltar para última página</a></p>

    </main>
</body>

</html>