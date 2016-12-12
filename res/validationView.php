<!DOCTYPE html>
               

        <meta charset="UTF-8"/>
		<head>
                <title>  VALIDATION DES RESERVATIONS   </title>
                <h1>     VALIDATION DES RESERVATIONS   </h1>
				<link rel="stylesheet" href='styles.css' /> 
		</head>
        <body>
                <?php
				
                    echo '<tr>'."Destination  ".'&nbsp&nbsp&nbsp'.$reservation->getDestination().'</tr></br>';
					echo '<tr>'."Nombre de places  ".'&nbsp&nbsp&nbsp'.$reservation->getNumberOfPlaces().'</tr></br>';
					
					foreach($detail->getListPeople() as $people){
						echo '<tr>'.$people->getName().'&nbsp&nbsp&nbsp';
						echo $people->getAge().'</tr></br>';
					}
					
					echo "Assurance annulation".'&nbsp&nbsp&nbsp';
					if($reservation->getIsInsured()){
						echo "OUI".'<br><br><br>';
					}else{
						echo "NON".'<br><br><br>';
					}
				?>
				
				
				<form method="post" action="index">
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
								Retour à la page précédente
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