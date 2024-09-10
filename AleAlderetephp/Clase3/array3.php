<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Array</title>
    </head>
    <body>
        <?php
        $produtos = array(
            array("heladera",2500000,18),
            array("microonda",1500000,9),
            array("cocina",590000,21),
            array("licuadora",450000,15),
            array("Mixer",260000,5),
            array("ventilador",150000,15),
        );
        $arraylongitd = count($produtos);
        //Imprimir todos los valores
        for ($x = 0; $x < count($produtos); $x++){
            for ($y = 0; $y < count($produtos[$x]) ; $y++){
                echo $produtos[$x][$y];
                echo "<br>";
            }
        }
        echo "<br>";  
        echo "Productos con precios <= 1000000";
        echo "<br>";
        echo "<br>";  
        //Imprimir solo los productos con (precios <= 1000000)
        for ($x = 0; $x < count($produtos); $x++){
            for ($y = 0; $y <3 ; $y++){
                if ($produtos[$x][1] <= 1000000){
                    echo $produtos[$x][$y];
                    echo "<br>";    
                }
            }
        }
        ?>
    </body>
</hmtl>
