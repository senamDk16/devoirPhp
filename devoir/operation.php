

<?php 


    if(isset($_POST['send'])){
        function operation($nom, $prenom, $age, $algo_devoir, $algo_partiel, $merise_devoir, $merise_partiel, $fbd_devoir, $fbd_partiel){

            // Coefficients
            $coef_algo = 3;
            $coef_merise = 4;
            $coef_fbd = 4;

            // Calcul des notes finales
            $note_algo = ( (floatval( $algo_devoir) * 0.4) + (floatval( $algo_partiel )* 0.6 ) ) * $coef_algo;
            $note_merise = ( (floatval($merise_devoir) * 0.4) + (floatval( $merise_partiel) * 0.6)) * $coef_merise;
            $note_fbd = ( (floatval( $fbd_devoir) * 0.4) + (floatval($fbd_partiel) * 0.6)) * $coef_fbd;

            // Calcul de la moyenne générale
            $moyenne_generale = ($note_algo + $note_merise + $note_fbd) / ($coef_algo + $coef_merise + $coef_fbd);

            // Détermination de la mention
            if ($moyenne_generale < 10) {
                $mention = "Mauvais";
            } elseif ($moyenne_generale < 15) {
                $mention = "Bien";
            } elseif ($moyenne_generale <= 17) {
                $mention = "Très bien";
            } else {
                $mention = "Excellent";
            }

            //return le html
            $html = "
                        <div class='container'>
                    <div class='grid-2'>
                        <h1> identification </h1>
                        <div>
                            <p> Nom : </p> $nom
                            <p> Prenom : </p> $prenom
                            <p> Age : </p>   $age             
                        </div>

                    </div>
                    <div>
                        **********************************
                    </div>
                    <div class='grid-2'>
                        <h1> notes </h1>
                        <div>
                            <p> Note Definitive Algo : </p> $note_algo
                            <p> Note Definitive Merise : </p> $note_merise
                            <p> Note Definitive Fbd : </p> $note_fbd               
                        </div>

                    </div>
                    <div>
                        **********************************
                    </div>
                    <div class='grid-2'>
                        <h1> observaiton </h1>
                        <div>
                            <p> Moyenne General : </p> $moyenne_generale
                            <p> Mention : </p>      $mention          
                        </div>

                    </div>

                </div>
            
            
            ";

            return $html;
        }        
    }



?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>

    <link rel="stylesheet" href="./styles/opertation.css">
</head>
<body>

    <?php 
        if(isset($_POST['send'])){
            //recuperation des valeurs
            foreach($_POST as $key=>$val){
                ${$key} = $val;
            }                   
            echo operation($nom, $prenom, $age, $algo_devoir, $algo_partiel, $merise_devoir, $merise_partiel, $fbd_devoir, $fbd_partiel) ;
 
        }
        else{ ?>

            <div class="container">
                Retour sur Formualaire <a href="./index.php"><button type="button">Formulaire</button></a>
            </div>
    <?php
     }
    ?>
    
</body>
</html>