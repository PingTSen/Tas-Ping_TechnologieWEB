<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<!--View of the reservation-->


<!DOCTYPE html>
               

        <meta charset="UTF-8"/>
        <section> 
		<head>
                <title>  RESERVATION   </title>
                <h1>     RESERVATION   </h1>
               <!-- <style>file_get_contents(__DIR__.'/styles.css')</style>-->
				<link rel="stylesheet" href='styles.css' /> 
			    <span class="errorMessage">
			   <?php if($reservation->getIsError()){echo $reservation->getErrorMessage();}?>
				</span>
        </head>
        <body>
		      
                <p> Le prix de la place est de 10 euros jusqu'à 12 ans et ensuite de 15 euros.</p>
                <p> Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.</p><br>
                <div id="container"> 
                <form name="rsv" method="post" action="controls.php">
				
                        <label for="destination">   Destination          :</label> 
						<input type="text" name="destination" 
						value="<?php echo htmlspecialchars($reservation->getDestination()); ?>" / >      <br>  
                        <!-- htmlspecialchars for XSS protection -->

						<label for="number_Places"> Nombre de places     :</label>
						<input type="text" name="number_of_places"
						 value="<?php echo htmlspecialchars($reservation->getNumberOfPlaces()); ?>" / > <br>
                        
						<label for="insurance">     Assurance annulation :</label> 
						<input type="checkbox" name="insurance" / >    <br>
						<input type="hidden" id="nextR" value="1"/>
						
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
						<span class="cancelR">
								Annulation
								<input type="submit" name = 'cancelR'  style="display:none"  />
						</span>
				</label>
				</a>
				<br>
                </form>
				
				
		</section>
        </body>        
</html>