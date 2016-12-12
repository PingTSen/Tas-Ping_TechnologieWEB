<!DOCTYPE html>
    <meta charset="UTF-8"/>

        <head>
            <title>  LISTE DES RESERVATIONS   </title>
                <h1>     LISTE DES RESERVATIONS   </h1>
        </head>
        <body>
            <a href="#" class="button">
                <label>
                    <span class="ajoutReserv" > <!-- a rajouter dans CSS-->
                        Add a reservation
                        <input type="submit" name = 'ajoutReserv'  style="display:none" />
                    </span>
                </label>
            </a>
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
                            echo "<td>".$line['Nom - Age']."</td>";
                            echo "</tr>\n";
                        }
                    }
                        
                 ?>

            </table>   
        </body>
</html>