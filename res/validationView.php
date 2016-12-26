<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<!-- View of -->
<!DOCTYPE html>
               
        <meta charset="UTF-8"/>
		<head>
          <title>  VALIDATION DES RESERVATIONS   </title>
          <h2><center>     Valider votre réservation, envolez-vous !   </center></h2>
		  <link rel="stylesheet" href='styles.css' /> 
		</head>
		
        <body>
	     	<section>
		     	<div id="container"> 
				<form method="post" action="index.php">
				<input type="hidden" name="page" value="controls" />
					<?php			
					  echo '<tr>'."Destination  : ".
					  '&nbsp&nbsp&nbsp'.
					  '<span class="style">'.
					  $reservation->getDestination().
					  '</span></tr></br>';
					  echo '<tr>'."Nombre de places  : ".
					  '&nbsp&nbsp&nbsp'.'<span class="style">'.
					  $reservation->getNumberOfPlaces().
					  '</span></tr></br>';
					  echo '<center><span class="style"><br>';					
					  foreach($detail->getListPeople() as $people){
						echo '<tr>'.$people->getName().'&nbsp&nbsp&nbsp';
						echo $people->getAge().'</tr></br>';
					  }				
					  echo '</span></center><br>';
					  echo "Assurance annulation  : ".
					  '&nbsp&nbsp&nbsp'.
					  '<span class="style">';					
					  if($reservation->getIsInsured()){
						echo "OUI".'<br>';
					  }else{
						echo "NON".'<br>';
       				  }
					  echo '</span>';
		     		?>
				</div>					
				<center>
		     		<a href="#" class="button">
			    		<label>
					       Confirmer
						   <input type="submit" name = 'validate'  style="display:none" />
						</label>
					</a>
					<a href="#" class="button">
						<label>
		    			   Retour  
						   <input type="submit" name = 'previousV'  style="display:none" />
						</label>
					</a>
					<a href="#" class="button">
						<label >
							Annulation
							<input type="submit" name = 'cancel'  style="display:none"  />
						</label>
					</a>
				</center>
				</form>
			</section>
        </body>
</html>