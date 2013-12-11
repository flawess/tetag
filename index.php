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
			$adresseclean=filter_var($_POST['adresse'], ENT_QUOTES);
			?>
			<div id="url">
				<?php
					echo "$adresseclean";
				?>
			</div>
			<?php
		}
		?>

	</div>

</body>

</html>