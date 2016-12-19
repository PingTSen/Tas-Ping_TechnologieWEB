<!DOCTYPE html>
               

        <meta charset="UTF-8"/>
		<head>
                <title>  VALIDATION DES RESERVATIONS   </title>
                <h2><center>     Valider votre réservation, envolez-vous !   </center></h2>
				<link rel="stylesheet" href='styles.css' /> 
		</head>
        <body>
				<div id="container"> 

						<?php
						
							echo '<tr>'."Destination  : ".'&nbsp&nbsp&nbsp'.$reservation->getDestination().'</tr></br>';
							echo '<tr>'."Nombre de places  : ".'&nbsp&nbsp&nbsp'.$reservation->getNumberOfPlaces().'</tr></br>';
						 
							foreach($detail->getListPeople() as $people){
								echo '<tr>'.$people->getName().'&nbsp&nbsp&nbsp';
								echo $people->getAge().'</tr></br>';
							}
							
							echo "Assurance annulation  : ".'&nbsp&nbsp&nbsp';
							
							if($reservation->getIsInsured()){
								echo "OUI".'<br><br><br>';
							}else{
								echo "NON".'<br><br><br>';
							}
							
						?>
				
				</div>
				
				<form method="post" action="index.php">
						<input type="hidden" name="page" value="controls" />
						<a href="#" class="button">
								<label>
										<span class="confirme" >
												Confirmer
												<input type="submit" name = 'validate'  style="display:none" />
										</span>
								</label>
						</a>
						<a href="#" class="button">
								<label>
										<span class="beforePage" >
												Retour  
												<input type="submit" name = 'previousV'  style="display:none" />
										</span>
								</label>
						</a>
						<a href="#" class="button">
								<label >
										<span class="cancelR">
												Annulation
												<input type="submit" name = 'cancel'  style="display:none"  />
										</span>
								</label>
						</a>              
                </form>
       
        </body>

</html>