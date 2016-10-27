<html>

<head>
	<meta charset="UTF-8" />
	<title>tetag...</title>
	<link rel="stylesheet" type="text/css" href="tatag.css">
	<link rel="icon" type="image/png" href="favicon.png">
</head>

<body>

	<div id="innhold">

		<?php
		if (isset($_POST['submitknapp']))
		{
			    $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_URL);  
			    if (filter_var($adresse, FILTER_VALIDATE_URL)) {  
			        echo "<a href='"'$adresse'"'>$adresse</a> is a valid URL.<br/><br/>";  
			    } else {  
			        echo "$adresse is <strong>NOT</strong> a valid URL.<br/><br/>";  
			    }  

			?>
			<?php
		}
		?>

	</div>

</body>

</html>
