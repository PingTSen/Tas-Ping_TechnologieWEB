<!DOCTYPE html>
    <meta charset="UTF-8"/>

        <head>
            <title>  LISTE DES RESERVATIONS   </title>
                <h1>     LISTE DES RESERVATIONS   </h1>
        </head>
        <body>
		<form method="post" action="index.php">
            <a href="#" class="button">
                <label>
                    <span class="ajoutReserv" > <!-- a rajouter dans CSS-->
                        Add a reservation
                        <input type="submit" name = 'ajoutReserv'  style="display:none" />
                    </span>
                </label>
            </a>
		</form>
            <br>
            <!-- Création du tableau-->
            <table>
                <tr>
                <!-- Les colonnes-->
                    <th>Id</th>
                    <th>Destination</th>
                    <th>Assurance</th>
                    <th>Total</th> 
                    <th>Nom - Age</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>    
                <!-- Contenu de la table -->
                               
                <?php
                    $mysqli = new mysqli("localhost", "root", "","reservation") or die("Could not select database");
                    if ($mysqli->connect_errno) {
                        
                        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ")".$mysqli->connect_error;
                        
                    }else{
                        
                        $query = "SELECT * FROM reservation";
                        $result = $mysqli->query($query) or die("Query failed ");
                        while ($line = $result->fetch_array(MYSQLI_ASSOC))
                        {
                            echo "</tr>\n";
                            echo "<td>".$line['Id']."</td>";
                            echo "<td>".$line['Destination']."</td>";
                            echo "<td>".$line['Assurance']."</td>";
                            echo "<td>".$line['Total']."</td>";
                            echo "<td>".$line['NA']."</td>";
							echo "<td><form method=/'post/' action='index.php'>
								 <a href=/'#/' class=/'button/'>
								<label>
								<span class=/'Edition/' > <!-- a rajouter dans CSS-->
								Editer
								<input type='submit' name = 'edition'  style='display:none 'value='chiiffre' />
								<input type='hidden' name='page' value='controls' />
								</span>
								</label>
								</a>
								</form></td>";
							echo "<td><form method=/'post/' action=/'index.php/'>
							 <a href=/'#/' class=/'button/'>
							<label>
							<span class=/'Delete/' > <!-- a rajouter dans CSS-->
							Supprimer
							<input type='submit' name = 'delete'  style='display:none' />
							</span>
							</label>
							</a>
							</form></td>";
                            echo "</tr>\n";
							
                        }
                    }
                        
                 ?>

            </table>   
        </body>
</html>