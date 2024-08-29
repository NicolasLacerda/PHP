<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        // abs() Valor sem sinal
        $res = abs(-2000);
        print $res;
    ?>
    <br>
    <?php 
        // base_convert() Converte o número para octal, hexadecimal, binário.
        $res2 = base_convert(254, 10, 16);
        print $res2;
    ?>
    <br>
    <?php 
        // ceil() arredonda para cima
        //número decimais usasse ponto e não virgula
        $res1 = ceil(21.7);
        print $res1;
    ?>
    <br>
    <?php 
        //floor() arredonda para baixo
        //número decimais usasse ponto e não virgula
        $res2 = floor(21.7);
        print $res2;
    ?>
    <br>
    <?php 
        //round() arredonda
        //número decimais usasse ponto e não virgula

        $res3 = round(21.7);
        print $res3;
    ?>
    <br>
    <?php 
        // hypot() Calcura a hipotenusa com base nos catetos
        $res1 = hypot(5, 2);
        print $res1;
    ?>
    <br>
    <?php 
        // intdiv() Número mais proximo de uma divisão com virgula
        $res1 = intdiv(5,2);
        print $res1;
    ?>
    <br>
    <?php 
        // min() pega o menor valor entre os números do array
        $res1 = min(5, 2, 1, 23, 23, 5);
        print $res1;
    ?>
    <br>
    <?php 
        // max() pega o maior valor entre os números do array
        $res1 = max(5, 2, 1, 23, 23, 5);
        print $res1;
    ?>
    <br>
    <?php 
        // pi() valor de pi
        $res1 = pi();
        print $res1;
    ?>
    <br>
    <?php 
        // pow() potência
        $res1 = pow(5, 2);
        print $res1;
    ?>
    <?php 
        // sin(), cos(), tan()
    ?>
    <br>
    <?php 
        // sqrt() calcula raiz quadrada de um número
        $res1 = sqrt(9);
        print $res1;
    ?>
</body>

</html>