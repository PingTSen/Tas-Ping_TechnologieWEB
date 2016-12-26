<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<!DOCTYPE html>
               
        <meta charset="UTF-8"/>
		<head>
            <title>  CONFIRMATION DES RESERVATIONS   </title>
            <h2><center>     Confirmations des réservations   </center></h2>
			<link rel="stylesheet" href='styles.css' />
        </head>
        <body>
			<div id="container"> 

				<p> Votre demande à bien été enregistrée. <br></p>
				<p> Merci de bien vouloir verser la somme de : </p>
			
				<center>
					<span class="style">
						<?php 
						$price = unserialize($_SESSION['price']);
						echo $price->getPrices();echo ' €';
						?>
					</span>
				</center>

				<p>	sur le compte : <center><span class="style">
					000-000000-00 <br>
				</p></span></center>
			</div>

			<section>
				<center>
					<form method="post" action="index.php">
						<input type="hidden" name="page" value="controls" />
						<a href="#" class="button">
							<label>
								Retour Accueil
								<input type="submit" name = 'confirme'  style="display:none"  />
							</label>
						</a>
					</form>
				</center>
			</section>
			
        </body>
</html>