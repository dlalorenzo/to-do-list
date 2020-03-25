<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>To-Do-List</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style_naam.css">
</head>
<body>
	<h1>
		formulier
	</h1>
		<form action="insert.php" method="POST">		
			<p>
				<label>vul je naam in</label>
				<input type="text" name="voornaam">
			</p>

			<p>
				<label>vul je leeftijd in</label>
				<select  name="age" value="age">

					<?php for ($x = 0; $x <= 100; $x++) { ?>

						<?php 

						if($x == 50){
							$tekst = "selected";
						}
						else{
							$tekst = "";
						}

						?>

						<option <?php echo $tekst ?>><?php echo $x ?></option>

						<?php  } ?>
					</select>
			</p>

			<p>
				<label>vul je stad in</label>
				<input type="text" name="stad">
			</p>

			<p>
			<label>Transport:</label><br>
            <input type="radio" name="vervoer" value="fiets">Fiets<br>
            <input type="radio" name="vervoer" value="auto">Auto<br>
            <input type="radio" name="vervoer" value="motor">motor<br>
            <input type="radio" name="vervoer" value="bus">Bus<br>
            <input type="radio" name="vervoer" value="trein">Trein<br>
			</p>

			<p><button type="submit" >toevoegen</button> <button type="reset" value="Reset">Reset</button></p>  

		</form>
</body>
</html>