<?php
    
        
        $html = '<!DOCTYPE html>
                 <meta charset="UTF-8"/>
                    <html>
                        <head>
                            <title> RESERVATION </title>
                            <h1> RESERVATION </h1>
                            <style>'.file_get_contents(__DIR__.'/styles.css').'</style>
                        </head>
                        <body>
                        <p> Le prix de la place est de 10 euros jusqu\'à 12 ans et ensuite de 15 euros.</p>
                        <p> Le prix de l\'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.</p><br>
                        <div id="container"> 
                        <form method="post" action="controls.php">
                            <label for="destination">   Destination          :</label> <input type="text" name="destination" / >      <br>
                            <label for="number_Places"> Nombre de places     :</label> <input type="text" name="number_of_places" / > <br>
                            <label for="insurance">     Assurance annulation :</label> <input type="checkbox" name="insurance" / >    <br>
                        </div><br>
                        <input type="submit" value="Etape suivante" / >
                        <input type="submit" value="Annuler la reservation" / >
                        </form>
                        ';
        if($reservation->getIsError()){
            $reservation-> //afficher la page en mettant l'erreur tout en haut pr la prochaine fois
        }
        $html.= '</body> </html>';
    
        echo $html;

    
    

?>