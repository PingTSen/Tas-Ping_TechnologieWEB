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
               <form method="post" action="detailControls.php">
                    <?php for($i=1; $i<=$reservation->getNumberOfPlaces(); $i++)
                          {
                              $html = '<label for="Name">   Nom     :</label> <input type="text" name="nom[]" / >   <br> ';
                              $html.= '<label for="Age">    Age     :</label> <input type="text" name="age[]" / >   <br> ';
                              echo $html;
                          }   
                    ?>    
               </div><br>
               <input type="submit" name = 'next' value="Etape suivante" / >
               <input type="submit" name = 'Retour à la page précédente' value="Retour à la page précédente" / >
               <input type="submit" name = 'cancel' value="Annuler la resérvation" / >

               </form>
          </body>      

</html>
    