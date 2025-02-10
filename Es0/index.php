    <?php
        header("Content-Type: application/json");
        
        require "alunno.php";
        $nomi = array("Giacomo", "Lorenzo", "Leonardo", "Alessio", "Tommaso");
        $cognomi = array("Rossi","Paoli", "Pizzu","Mattei","Ginzi");
        $eta= array(18,17,19,20,19);
        $alunni=array();

        for($i = 0; $i < count($nomi); $i++){
            $alunno=new alunno();
            $alunno->setnome($nomi[$i]);
            $alunno->setcognome($cognomi[$i]);
            $alunno->seteta($eta[$i]);
            $alunni[$i] = $alunno;
        }

        $stampa="<ul>";
        foreach($alunni as $alunno){
            $stampa.="<li>".$alunno->toString()."</li>";
        }

        $stampa.="</ul>";
        //echo $stampa;
        $my_json = json_encode($alunni);
        echo $my_json;

    ?>