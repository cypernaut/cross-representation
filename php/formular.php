<!doctype html>
<html lang="de">
<header>
	<title>Spass</title>
</header> 
<body>
	<form action="send.php" method="post">
		<input type="text" name="benutzername" value="<?php echo 'Mr. X' ?>" />;
		<input type="password" name="passwort1" value="<?php echo '*****' ?>" />
		<input type="password" name="passwort2" value="<?php echo '*****' ?>" />
		<input type="submit" value="registrieren" />
	</form>
</body>
</html>