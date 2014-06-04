<!DOCTYPE html>
<html lang = "es">
<title> Bucle While</title>

<h1> Bucle While</h1>
<body>
<?php
$i = 0;
$a = $_GET['num1'];
	while($i<$a)
	{
		if($i%2)
		{

			echo $i;
			
		}
		$i++;
	}

?>
</body>
