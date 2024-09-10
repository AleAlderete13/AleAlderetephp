<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Array</title>
    </head>
    <body>
        <?php
        $dia[0] = "Domingo";
        $dia[1] = "Lunes";
        $dia[2] = "Martes";
        $dia[3] = "Miercoles";
        $dia[4] = "Jueves";
        $dia[5] = "Viernes";
        $dia[6] = "Sabado";
    
        $mes = array("enero","febrero","marzo");
        //Mostrar el viernes
        echo "$dia[5]";
        echo "<br>";
        //imprimir febrero
        echo $mes[1];
        echo "<br>";
        ?>
        <?php
        $autos = array("volvo","BMW","Toyota");
        $arraylongitd = count($autos);
        for($x = 0; $x <$arraylongitd ; $x++){
            echo $autos[$x];
            echo "<br>";
        }
        ?>
    </body>
</hmtl>