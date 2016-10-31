<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<!DOCTYPE html>
               
          <meta charset="UTF-8"/>
                 
          <head>
               <title>  DETAILS DES RESERVATIONS   </title>
               <h1>     DETAILS DES RESERVATIONS   </h1>
               <link rel="stylesheet" href='styles.css' /> 
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
				<a href="#" class="button">
				<label>
						<span class="nextR" >
								Etape suivante
								<input type="submit" name = 'nextR'  style="display:none" />
								<!--<input type="submit" name = 'cancelR' value="Annuler la reservation" / >-->
						</span>
				</label>
				</a>
               <a href="#" class="button">
				<label >
						<span class="beforePage">
								Retour à la page précédente
								<input type="submit" name = 'beforePage'  style="display:none"  />
						</span>
				</label>
				</a>
                            
               <a href="#" class="button">
				<label >
						<span class="cancelR">
								Annuler la réservation
								<input type="submit" name = 'CancelR'  style="display:none"  />
						</span>
				</label>
				</a>

               </form>
          </body>      

</html>
    