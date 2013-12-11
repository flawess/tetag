<html>

<head>
	<meta charset="UTF-8" />
	<title>tetag...</title>
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
			    $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_URL);  
			    if (filter_var($adresse, FILTER_VALIDATE_URL)) {  
			        echo "<a href=\"'http://'$adresse\">$adresse</a> is a valid URL.<br/><br/>";  
			    } else {  
			        echo "$adresse is <strong>NOT</strong> a valid URL.<br/><br/>";  
			    }  

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