<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Alunni:
    </h1>
    

    <?php

        require_once("Automobile.php");
        $marche = array("suzuki", "mercedes", "fiat");
        $anni = array(2010,2020, 2023);
        $modelli= array("x","y","z");
        $automobili=array();

        for($i = 0; $i < count($marche); $i++){
            $automobile=new Automobile($marche[$i],$anni[$i], $modelli[$i]);
            $automobili[$i] = $automobile;  
        }

        $stampa="<ul>";
        foreach($automobili as $automobile){
            $stampa.="<li>".$automobile->__tostring()."</li>";
        }

        $stampa.="</ul>";
        echo $stampa;






    ?>
</body>
</html>