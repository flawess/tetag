<html>

<head>
	<meta charset="UTF-8" />
	<title>tetag...k</title>
	<link rel="stylesheet" type="text/css" href="tatag.css">
	<link rel="icon" type="image/png" href="favicon.png">
</head>

<body>
	
	<div id="innhold">
		<form action="index.php" method="post">
			Adresse:<input id="adressefelt" type="text" name="adresse">
			<input id="submitknapp" type="submit" name="submitknapp" value="submitknapp">
		</form>
		<?php
		if (isset($_POST['submitknapp']))
		{
			$adresse=$_POST['adresse']; 
			?>
			<div id="url">
				<?php
					echo "$adresse";
				?>
			</div>
			<?php
		}
		?>

	</div>

</body>

</html>