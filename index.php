<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>void.no</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="stilark_index.css">
</head>
<body>
    <div class="midtstilt">
        <h1>VOID</h1>
        <nav>
            <ul>
                <li id="logoMeny">
                    <a href="index.php"><img src="bilder/voidV.png" alt="Logoen til Void" height="50px"></a>
                </li>
                <li>
                    <a href="index.php">Hjem</a>
                </li>
                <li>
                    <a href="#">Statestikk</a>
                </li>
                <li>
                    <a href="#">Highlights</a>
                </li>
                <li>
                    <a href="store.php">Butikk</a>
                </li>
                <li>
                    <a href="#">Om oss</a>
                </li>
            </ul>
        </nav>
        
        <?php
			// Innloggingsinformasjon og spesifisering av kva database ein jobbar med
			$db_host = 'localhost';
			$db_user = 'root';
			$db_password = '';
			$db_db = 'voiddb';
			$db_port = 3306;

			$mysqli = new mysqli(
				$db_host,
				$db_user,
				$db_password,
				$db_db
			);
			
			// Kontroll om tilkoblingen til databasen fungerar (henta frå MAMP-startsida)
			if ($mysqli->connect_error) {
				echo 'Errno: '.$mysqli->connect_errno;
				echo '<br>';
				echo 'Error: '.$mysqli->connect_error;
				exit();
			}

			echo '<p>Success: A proper connection to MySQL was made.';
			echo '<br>';
			echo 'Host information: '.$mysqli->host_info;
			echo '<br>';
			echo 'Protocol version: '.$mysqli->protocol_version . "</p><br>";

			$mysqli->set_charset("utf8");
            /*

			// Hentar ut data frå databasen og skriv det ut til nettsida.
			// Basert på https://www.w3schools.com/php/php_mysql_select.asp
			$sql = "SELECT blad.blad_id, blad.bladnavn, figur.figur_id FROM blad, figur WHERE blad.blad_id = figur.blad_id";
			$result = $mysqli->query($sql);

			// Enkel utskrift, utan formatering
			
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "Fornavn: " . $row["fornavn"]. " - Etternavn: " . $row["etternavn"]. " " . $row["etternavn"]. " - Postnummer: " . $row["postnr"]. " - Poststed: " . $row["poststed"]. "<br>";
			}
			} else {
				echo "Ingen resultat.";
			}
			

			// Alternativ med HTML-tabell
			if ($result->num_rows > 0) {
				echo "<table><tr><th>blad_id</th><th>bladnavn</th><th>figur_id</th></tr>";
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row["blad_id"]."</td><td>".$row["bladnavn"]."</td><td>".$row["figur_id"]."</td></tr>";
				}
				echo "</table>";
			} 
			else {
				echo "Ingen resultat.";
			}

			$mysqli->close();
		*/
        ?>
        

        <div class="grid-container">
            <div class="Roster">
                <h2>Roster</h2>
                <div class="containerRosterElement">
                    <div class="innholdRosterElement">
                        <img class="rosterBilde" src="bilder/roster/casper_karlsen.jpeg" alt="Bilde av Casper Karlsen" height="100px">
                    </div>
                    <div class="innholdRosterElement">
                        <p>Casper "Raze" Karlsen</p>
                    </div>
                </div>
                <div class="containerRosterElement">
                    <div class="innholdRosterElement">
                        <img class="rosterBilde" src="bilder/roster/vebjorn_kjetsaa.jpeg" height="100px">
                    </div>
                    <div class="innholdRosterElement">
                        <p>Vebjørn "Knekken" Kjetsaa</p>
                    </div>
                </div>
                <div class="containerRosterElement">
                    <div class="innholdRosterElement">
                        <img class="rosterBilde" src="bilder/roster/tony_rannestad.jpeg" height="100px">
                    </div>
                    <div class="innholdRosterElement">
                        <p>Tony "VikingT" Rannestad</p>
                    </div>
                </div>
                <div class="containerRosterElement">
                    <div class="innholdRosterElement">
                        <img class="rosterBilde" src="bilder/roster/saavi_midtveit.jpeg" height="100px">
                    </div>
                    <div class="innholdRosterElement">
                        <p>Såvi "Chatteren" Midtveit</p>
                    </div>
                </div>
                <div class="containerRosterElement">
                    <div class="innholdRosterElement">
                        <img class="rosterBilde" src="bilder/roster/saavi_midtveit.jpeg" height="100px">
                    </div>
                    <div class="innholdRosterElement">
                        <p>Såvi "Chatteren" Midtveit</p>
                    </div>
                </div>
            </div>

            <div class="NesteMatch">
                <div id="divNesteMatch">
                    <h2>Neste match:</h2>
                </div>
                <p id="datoMatch">Torsdag 30.04.2021</p>
                <p id="tidspunktMatch">20:00</p>
            </div>

            <div class="merch">
                <h2>Merchandise</h2>
                <div id="merch-container-index">
                    <div class="Item1">
                        <p>Hoodie</p>
                        <img src="bilder/merch/hoodie_voidv3.png" alt="Hettegenser" class="bilderMerch">
                    </div>
                    <div class="Item2">
                        <p>Headset</p>
                        <img src="bilder/merch/headset_void.png" alt="Headset" class="bilderMerch">
                    </div>
                </div>
                <a href="store.php"><button type="button" id="btStore">Gå til butikken</button></a>
            </div>

            <div class="break"></div>

            <div class="Tabell">
                <h2>Tabell</h2>
                <table id="tabellTelia">
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Lag
                        </th>
                        <th>
                            Poeng
                        </th>
                        <th>
                            Kamper spilt
                        </th>
                        <th>
                            Vinn - Tap
                        </th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Void</td>
                        <td>40</td>
                        <td>8</td>
                        <td>8 - 0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Faze</td>
                        <td>20</td>
                        <td>8</td>
                        <td>4 - 4</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Astralis</td>
                        <td>0</td>
                        <td>8</td>
                        <td>0 - 8</td>
                    </tr>
                </table>
            </div>
            
        </div>

        <footer class="footer-container">
            <div id="containerFooter">
                <div class="innholdFooter">
                    <a href="https://www.twitch.tv/VOIDLiveNO"><img src="bilder/footer/twitch-logo-png-1.png" height="80px"></a>
                </div>
                <div class="innholdFooter">
                    <a href="#"><img src="bilder/footer/instagram.png" height="80px"></a>
                </div>
                <div class="innholdFooter">
                    <a href="#"><img src="bilder/footer/youtube.png" height="80px"></a>
                </div>
                <div class="innholdFooter">
                    <a href="https://twitter.com/voidapparat"><img src="bilder/footer/twitter.png" height="80px"></a>
                </div>
                <div class="innholdFooter">
                    <a href="#"><img src="bilder/footer/discord.png" height="80px"></a>
                </div>
                <div class="innholdFooter">
                    <a href="https://www.gamer.no/klubber/void/105368"><img src="bilder/footer/gamer_no.jpg" height="80px"></a>
                </div>
                <div class="innholdFooter">
                    <a href="https://apparat.no/"><img src="bilder/footer/apparatv2.png" height="80px"></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>