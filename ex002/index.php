<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testildo</title>
</head>

<body>
    <h1>exemplo</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
        print "hoje é dia" . " " .date("d/m/Y");

        print " horas:" . date("G:i:s");
    ?>
</body>

</html>