<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<!DOCTYPE html>
	
    <meta charset="UTF-8"/>
    <head>
        <title>  LISTE DES RESERVATIONS   </title>
        <h2><center>     Liste des réservations</br> <i><font size=6>[For Manager]</font></i> </center></h2>
		<link rel="stylesheet" href='styles.css' /> 
    </head>
	
    <body>
		<section>
			<form method="post" action="index.php">
				<center>
					<a href="#" class="button">
						<label>
							Add Reservation
							<input type="submit" name = 'ajoutReserv'  style="display:none" />
						</label>
					</a>
				</center>
			</form>
			<br>
		</section>
		
        <!-- Table creation -->
		<center>
            <table>
                <tr>
                <!-- Columns -->
                    <th>Id</th>
                    <th>Destination</th>
                    <th>Assurance</th>
                    <th>Total</th> 
                    <th>Nom - Age</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>
				
                <!-- Table content -->            
                <?php
                    $mysqli = new mysqli("localhost", "root", "","reservation") or die
					("Could not select database");
                    if ($mysqli->connect_errno) {                  
                        echo "Echec lors de la connexion à MySQL :(".
						$mysqli->connect_errno . ")".$mysqli->connect_error;                       
                    }else{                       
                        $query = "SELECT * FROM reservation";
                        $result = $mysqli->query($query) or die("Query failed ");
                        while ($line = $result->fetch_array(MYSQLI_ASSOC))
                        {
							$id=$line['Id'];
                            echo "</tr>\n";
                            echo "<td><center>".$line['Id']."</center></td>";
                            echo "<td><center>".$line['Destination']."</center></td>";
                            echo "<td><center>".$line['Assurance']."</center></td>";
                            echo "<td><center>".$line['Total']."</center></td>";
                            echo "<td><center>".$line['NomAge']."</center></td>";
							echo "<td>
								<form method='post' action='index.php'>
									<center>
										<a href='#' class='button'>
											<label>
												Editer
												<input type='submit' name = 'edition'  style='display:none 'value=$id />
												<input type='hidden' name='page' value='controls' />
											</label>
										</a>
									</center>
								</form></td>";
							echo "<td>
								<form method='post' action='index.php'>
									<center>
										<a href=# class='button'>
											<label>
												Supprimer
												<input type='submit' name = 'delete'  style='display:none 'value=$id />
												<input type='hidden' name='page' value='controls' />
											</label>
										</a>
									</center>
								</form></td>";
                            echo "</tr>\n";							
                        }
                    }
                ?>

            </table>
		</center>
    </body>
</html>