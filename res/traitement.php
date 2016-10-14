<?php

   session_start();
   
   $number=$_REQUEST['number_of_places'];
   
   if ($number !=0) {
     $html = '<!DOCTYPE html>
                <html>
                <meta charset="UTF-8"/>
                    <head>
                        <title> DETAIL </title>
                        <h1> Détail réservation </h1>
                        <style>'.file_get_contents(__DIR__.'/styles.css').'</style>
                    </head>
                    <body>
                    <div id="container">
                    <form method="post" action="controls.php">';
                    
    for ($counter = 0 ; $counter <$number ; $counter ++) {
       
       $html.= '<label for="name">Nom  :</label> <input type="text" name="name[]" / ><br>
                <label for="ages">Age  :</label> <input type="text" name="ages[]" / ><br><br>';
                       
                                    
    }
    $html.= '</div>';
    $html.= '<br><input type="submit" value="Etape suivante" />
    <input type="submit" value="Retour à la page précédente" />
    <input type="submit" value="Annuler la reservation" />';
    $html.= '</form>';
    $html.= '</body> </html>';
    
   }
   echo $html;

?>