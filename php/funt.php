<!doctype html>
<html lang="de">
<header>
	<title>Fkt</title>
</header> 
<body>
	<?php
	 $password = "cornelius";
	$test = "94a1e034a7b64643302fa0588b48210e9270389e7ba6724b0869665e2085af3b11d9d750cffb6fa204f090a0dd037f7d6fcfdf73450b50ca0bcedc191f50c3e1";
		echo (hash('sha512', $password . $test));

	?>
</body>
</html>