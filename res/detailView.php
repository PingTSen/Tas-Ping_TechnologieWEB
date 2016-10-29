<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<!DOCTYPE html>
               
          <meta charset="UTF-8"/>
                 
          <head>
               <title>  DETAILS DES RESERVATIONS   </title>
               <h1>     DETAILS DES RESERVATIONS   </h1>
          </head>
          
          <body>
               <p> </p>
               <p> </p><br>
               <div id="container"> 
               <form method="post" action="controls.php">
                    <?php for($i=1; $i<=$reservation->getNumberOfPlaces(); $i++)
                          {
                              $html = '<label for="Name">   Nom     :</label> <input type="text" name="nom[]" / >   <br> ';
                              $html.= '<label for="Age">    Age     :</label> <input type="text" name="age[]" / >   <br> ';
                              echo $html;
                          }   
                    ?>    
               </div><br>
               <input type="submit" name = 'nextD' value="Etape suivante" / >
               <input type="submit" name = 'previousD' value="Retour à la page précédente" / >
               <input type="submit" name = 'cancelD' value="Annuler la resérvation" / >

               </form>
          </body>      

</html>
    