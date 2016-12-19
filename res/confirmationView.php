<!DOCTYPE html>
               

        <meta charset="UTF-8"/>
		<head>
            <title>  CONFIRMATION DES RESERVATIONS   </title>
            <h2><center>     Confirmations des réservations   </center></h2>
			<link rel="stylesheet" href='styles.css' />
        </head>
        <body>
            <p> Votre demande à bien été enregistrée. <br></p>
            <p> Merci de bien vouloir verser la somme de </p> 
			<?php $price = unserialize($_SESSION['price']); echo $price->getPrices();echo 'Euro';?>
			<p>	sur le comptes 000-000000-00 <br></p>
            <form method="post" action="index.php">
				<input type="hidden" name="page" value="controls" />
                <a href="#" class="button">
                    <label>
						<span class="confirme">
								Retour à la page d'accueil
								<input type="submit" name = 'confirme'  style="display:none"  />
						</span>
                    </label>
				</a>
            </form>
        </body>
</html>