<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Operadores de atribuicao</title>
    <style>
        h2 {
            font: 15pt Arial;
            color: #00008b;
            font-weight: bold;
        }
        body {
            background-color: #fff;
            position: absolute; 
        }
        .tela{
            color: #000;
        }
        .logo{
            position: fixed;
        }
        footer {
            font: 13pt italic;
            color: #191970;
            font-family: Calibri;
            position: fixed;
        }
    </style>
</head>
<body>
    <header class="header">
        <!--<img src="http://localhost/CursoEmVideo/pinkfloyd_wall.jpg" class="logo">-->
    <div class="text-center container tela">
        


        <?php
            echo "<h2>Operadores de atribuicao</h2>";
            $preco = $_GET["p"];
            echo "Preco do produto = R$". number_format($preco, 2);
            $preco += $preco*10/100;
            echo "</br> Preco com 10% de aumento = R$". number_format($preco, 2);

        ?>

        <img src="http://localhost/CursoEmVideo/pinkfloyd_wall.jpg" class="logo">

    </div>
    </header>
<footer>
    <h4>Thayrone Batista</h4>
</footer>
</body>
</html>