<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Array</title>
    </head>
    <body>
        <?php
        echo(pi()); // retorna el valor de pi
        echo "<br>";
        echo(min(0, 150, 20, -8, -200)); //retorna el menor
        echo "<br>";
        echo(max(0, 150, 20, -8, -200)); //retorna el mayor
        echo "<br>";

        echo (abs(-6.7)); // retorna el valor absoluto
        echo "<br>";

        echo(sqrt(64)); //retorna la raiz cuadrada
        echo "<br>";

        echo(round(0.60)); //redondea hacia arriba si el valor es >= .5 
        echo "<br>";
        echo(round(0.49)); //redondea hacia arriba si el valor es <= .5 
        echo "<br>";

        echo(rand()); // valor random
        echo "<br>";
        echo (rand(10,100)); // valor random entre 10 y 100
        echo "<br>";
        ?>
    </body>
</hmtl>