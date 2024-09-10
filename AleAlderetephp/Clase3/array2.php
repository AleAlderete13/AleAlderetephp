<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Array</title>
    </head>
    <body>
        <?php
        $edades = array("Moises" => "33" , "Camila" => "25" , "samanta" => "17" );
        echo "Camila tiene ". $edades["Camila"]. " años";
        echo "<br>";

        foreach ($edades as $x => $valor){
            echo "Nombre = ".$x , ", edad = ". $valor;
            echo "<br>";                     
        }           

        ?>
    </body>
</hmtl>