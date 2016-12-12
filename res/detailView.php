<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<!DOCTYPE html>
               
          <meta charset="UTF-8"/>
                 
          <head>
               <title>  DETAILS DES RESERVATIONS   </title>
               <h1>     DETAILS DES RESERVATIONS   </h1>
               <link rel="stylesheet" href='styles.css' />
			   <span class="errorMessage">
			   <?php if($detail->getIsError()){echo $detail->getErrorMessage();}?>
			   </span>
			   
          </head>
          
          <body>
               <p> </p>
               <p> </p><br>
               <div id="container"> 
               <form method="post" action="index">
			
                    <?php 
					$listPeople=$detail->getListPeople();
					$name = " ";
					$age=1;
					for($i=0; $i<$reservation->getNumberOfPlaces(); $i++)
                          {
							  if($listPeople != null){
								  $name=$listPeople[$i]->getName();
								  $age=$listPeople[$i]->getAge();
							  }
							  
                              $html = '<label for="Name">   Nom     :</label> <input type="text" name="nom[]" value='.$name.' >   <br> ';
                              $html.= '<label for="Age">    Age     :</label> <input type="text" name="age[]" value='.$age.' >   <br> ';
                              echo $html;
                          }   
                    ?>
					
               </div><br>
				<a href="#" class="button">
				<label>
						<span class="nextR" >
								Etape suivante
								<input type="submit" name = 'nextD'  style="display:none" />
								<!--<input type="submit" name = 'cancelR' value="Annuler la reservation" / >-->
						</span>
				</label>
				</a>
               <a href="#" class="button">
				<label >
						<span class="beforePage">
								Retour à la page précédente
								<input type="submit" name = 'previousD'  style="display:none"  />
						</span>
				</label>
				</a>
                            
               <a href="#" class="button">
				<label >
						<span class="cancelR">
								Annuler la réservation
								<input type="submit" name = 'cancel'  style="display:none"  />
						</span>
				</label>
				</a>

               </form>
			 
          </body>      

</html>
    