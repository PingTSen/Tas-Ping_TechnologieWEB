<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<!--View of the reservation-->


<!DOCTYPE html>              

        <meta charset="UTF-8"/>
		<head>
            <title>  RESERVATION   </title>
            <h1><center>     RESERVATION   </center></h1>
			<link rel="stylesheet" href='styles.css' /> 
			<span class="errorMessage">
				<?php if($reservation->getIsError()){
					echo $reservation->getErrorMessage();
					}
				?>
			</span>
        </head>
		
        <body>
			<section>
						
				<p> Le prix de la place est de 10 euros jusqu'à 12 ans et 
					ensuite de 15 euros.</p>
				<p> Le prix de l'assurance annulation est de 20 euros quel
					que soit le nombre de voyageurs.</p><br>
				<form name="rsv" method="post" action="index.php">
					<div id="container"> 
						<input type="hidden" name="page" value="controls" />
						<input type="hidden" name="check" value="ok" />
						<label for="destination">   Destination          :
						</label> 
						<input type="text" name="destination" 
						value="<?php echo htmlspecialchars($reservation->getDestination()); ?>" /><br>  
						<label for="number_Places"> Nombre de places     :</label>
						<input type="text" name="number_of_places" 
						value="<?php echo htmlspecialchars($reservation->getNumberOfPlaces()); ?>" /> <br>		
						<label for="insurance">     Assurance annulation  </label> 
						<input type="checkbox" name="insurance" / >    <br>							
					</div><br>	
					<center>
						<a href="#" class="button">	
							<label>
								Etape suivante
								<input type="submit" name = 'nextR'  style="display:none" />
							</label>
						</a>
						<a href="#" class="button">		
							<label>
							Annulation
							<input type="submit" name = 'cancel'  style="display:none"  />		
							</label>
						</a>
					</center><br>								
				</form>
			</section>
        </body>        
</html>