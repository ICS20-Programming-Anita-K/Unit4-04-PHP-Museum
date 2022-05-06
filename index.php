<!DOCTYPE html>
<html>
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Museum Admission">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anita Kay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    <!-- Link to style sheet -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Museum Admission</title>
  </head>
  <body>
    <!-- Heading -->
    <?php
      echo "<center>
    <h1>Museum Admission</h1>";
    ?>
		<table>
			<tr align = "center">
				<td valign="top" align="right">
					<?php
            echo "<h3>This program will tell the user the admission cost depending on their age and the day of the week:</h3>";
          ?>
          <!-- Space to enter information -->
					<form action="./results.php" method="post" target="results">
						<label for="age">Age:</label>
						<input type="number" step="1" min="0" name="age"><br><br>					
						<label for="day">Day:</label>
						<select name="day" name="day">
              <!-- Drop-down -->
						    <option value="">--Day of the Week--</option>
						    <option value="Sunday">Sunday</option>
						    <option value="Monday">Monday</option>
						    <option value="Tuesday">Tuesday</option>
						    <option value="Wednesday">Wednesday</option>
						    <option value="Thursday">Thursday</option>
						    <option value="Friday">Friday</option>
							<option value="Saturday">Saturday</option>
						</select>
						<br><br>
						<input type="submit" name="submit" value="Display Cost">
					</form>
				</td>
        <!-- Image -->
		    <?php
          echo "<br><img src='./images/museum.jpeg' alt='Museum' width='auto'>";
        ?>
			</tr>
		</table>
		<!-- Create a space where the user information will be displayed -->
		<iframe id="results" name="results">			
	  </iframe>
    </center>
    <br>
    <br>
  </body>
</html>