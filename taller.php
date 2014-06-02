<!DOCTYPE html">
<html lang = "es">
<meta charset = "utf-8"/>

<title> ¡¡Taller PHP!! </title>

<body>
	<form method = "GET" action = "resultados.php" background = "#000000">
		<b>Numero 1:</b>
		<input type = "text" name = "num1" autofocus> <br>
		<b>Numero 2:</b>
		<input type = "text" name = "num2" autofocus> <br><br>
		<b>Operacion:</b>
		<select name = "oper">
			<option value = "suma"> + </option>
			<option value = "resta"> - </option>
			<option value = "multi"> * </option>
			<option value = "div"> / </option>
			<option value = "modu"> % </option>
		</select><br>

		<input type = "submit" value = "Enviar">

	</form>
</body>
