<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Funcoes Aritmeticas em PHP</title>
    <style>
        h2 {
            font: 15pt Arial;
            color: darkblue;
            font-weight: bold;
        }
        body {
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "Valor absoluto de $v2 = ". abs($v2);
        echo "<br/>Valor de $v1<sup>$v2</sup> = ". pow($v1,$v2);
        echo "<br/>Raiz de $v1 = ". sqrt($v1);
        echo "<br/>Valor de $v2 arredondado = ". round($v2); //ceil (arredonda pra baixo) flow (pra cima...)
        echo "<br/>Parte inteira de $v2 = ". intval($v2);
        echo "<br/>Valor de $v2 em moeda R$= ". number_format($v2, 2, ",",".");
    ?>
</body>
</html>