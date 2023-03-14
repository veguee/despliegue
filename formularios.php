<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formularios</title>
</head>

<body>

Introduce datos: <br>

<form method="post"> <!--- Si no especificamos action volvemos al mismo documento --->
	Nombre: <input type="text" name="n" required><br>
	Turno: <br>
		<input type="radio" name="t" value="mañana"> Mañana<br>
		<input type="radio" name="t" value="tarde"> Tarde<br>
	Grado: <select name="g" required>
		<option value="DAW">DAW</option>
		<option value="ASIR">ASIR</option>
		<option value="SMR">SMR</option>
		</select><br>
	Cursa inglés: <input type="checkbox" name="i"><br>
	Cursa fol: <input type="checkbox" name="f"><br>
	<input type="submit" name="ok" value="Enviar">
</form>

<br><br>

Datos recogidos:<br>

<?php

// isset() devuelve true si la variable está definida
// En este caso sólo entramos al if si hemos clicado en "Enviar"
if(isset($_REQUEST['ok'])){
	// Para recoger los datos de text/number/select basta usar la clave
	echo "El alumno $_REQUEST[n] ";
	
	// Para recoger los datos de radio/checkbox hay que comprobar si están definidos
	if(isset($_REQUEST['t'])){
		echo "está matriculado en el turno de $_REQUEST[t] ";}

	echo "del grado $_REQUEST[g]. ";

	if(isset($_REQUEST['i'])){
		echo 'Tiene la asignatura de inglés. ';}
	if(isset($_REQUEST['f'])){
		echo 'Tiene la asignatura de fol. ';}}
?>

</body>
</html>