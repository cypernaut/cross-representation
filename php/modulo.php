<!doctype html>
<html lang="de">
<header>
	<title>Spass</title>
</header> 
<body>
	<?php
	for ($zahl=1; $zahl <= 13; $zahl++) { 
		$end = 13 % $zahl;
		echo "der modulo von 13 und ". $zahl. " ist ". $end . " ";	
	}
	?>
</body>
</html>