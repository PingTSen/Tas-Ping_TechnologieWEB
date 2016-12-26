<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<!DOCTYPE html>
               
     <meta charset="UTF-8"/>  
     <head>
          <title>  DETAILS DES RESERVATIONS   </title>
          <h2><center>     Entrez vos informations :   </center></h2>
          <link rel="stylesheet" href='styles.css' /> 
		  <span class="errorMessage">
			<?php if($detail->getIsError()){
				echo $detail->getErrorMessage();
				}
			?>
		  </span>	   
     </head>
          
	 <body>
		  <section> 
   			   <form method="post" action="index.php">
					<div id="container"> 
						 <input type="hidden" name="page" value="controls" />
						 <input type="hidden" name="check" value="ok" />
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
								   $html = '<label for="Name">   Nom     :</label>
								   <input type="text" name="nom[]" value='.$name.' >
								   <br> ';
								   $html.= '<label for="Age">    Age     :</label>
								   <input type="text" name="age[]" value='.$age.' > 
								   <br> ';
								   echo $html;
							  }   
						 ?>
							  
					</div> 
					<center>
						 <a href="#" class="button">
							  <label>
								   Etape suivante
								   <input type="submit" name = 'nextD'  style="display:none" />
							  </label>
						 </a>
						 <a href="#" class="button">
							  <label >
								   Retour 
								   <input type="submit" name = 'previousD'  style="display:none"  />
							  </label>
						 </a>			 
						 <a href="#" class="button">
							  <label >
								   Annuler 
								   <input type="submit" name = 'cancel'  style="display:none"  />
							  </label>
						 </a>
					</center>
			   </form>
		  </section> 
     </body>      
</html>
    