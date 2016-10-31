<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<!--View of the reservation-->


<!DOCTYPE html>
               

        <meta charset="UTF-8"/>
        <section> 
		<head>
                <title>  Validation   </title>
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
				<?php
				
				echo $reservation-> getIsInsured();
				
				?>
				
                <form name="rsv" method="post" action="controls.php">
				
				<a href="#" class="button">
				<label>
						<span class="nextR" >
								Etape suivante
								<input type="submit" name = 'validate'  style="display:none" />
								<!--<input type="submit" name = 'cancelR' value="Annuler la reservation" / >-->
						</span>
				</label>
				</a>
				
				<a href="#" class="button">
				<label >
						<span class="cancelR">
								Precedent
								<input type="submit" name = 'previousV'  style="display:none"  />
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
				
				
				
				<br>
                </form>
				
				
		</section>
        </body>        
</html>