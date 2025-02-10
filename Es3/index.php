<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Automobili:
    </h1>
    

    <?php

        require_once("Studente.php");
        $nomi = array("josh", "Matteo", "sara");
        $cognomi = array("neri","ciardi", "rossi");
        $matricole= array("x","y","z");
        $studenti=array();

        for($i = 0; $i < count($nomi); $i++){
            $studente=new Studente($nomi[$i],$cognomi[$i], $matricole[$i]);
            $studenti[$i] = $studente;  
        }

        $stampa="<ul>";
        foreach($studenti as $studente){
            $stampa.="<li>".$studente->presentati()."</li>";
        }

        $stampa.="</ul>";
        echo $stampa;






    ?>
</body>
</html>