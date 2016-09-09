<?php

define('IN_TOOL', 1);

include("constants.php");

$lang = (trim($_GET['lang']) != "") ? $_GET['lang'] : LANG_STANDARD;


if (in_array($lang, $lang_array)) 
	{
	include("language/" . $lang . ".php");	
	$hinweis_text = $language['hinweis'];
	}
else	
	{	
	include("language/" . LANG_STANDARD . ".php");	
	$hinweis_text = $language['sprachauswahlfehler'];
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>f-thies.de - Aufbau einer multilingualen Website - Demo 1</title>
<body>
<div style="padding:5px; margin: 10px; font: 1.0em Verdana, Arial, sans-serif;">
<h1>Aufbau einer multilingualen Website - Demo 1</h1>
<p style="margin: auto;text-align: center;">Sprachauswahl | <a href="index.php">Deutsch</a> | <a href="index.php?lang=en">Englisch</a> | <a href="index.php?lang=franz">Franz�sisch</a> |</p>
<p style="padding-top:5px">Hinweis: <?php echo $hinweis_text;?></p>
<p style="padding-top:5px">Text:<br /><?php echo $language['text'];?></p>
</div>
</body>
</html>