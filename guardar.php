<?php
// Obtener los datos del formulario
$Num.Participantes = $_POST['Num.Participantes'];
$procedencia = $_POST['Procedencia'];

// Guardar los datos en una base de datos o en un archivo, por ejemplo:
$archivo = fopen("datos.txt", "a");
fwrite($archivo, "Num.Participantes: " . $Num.Participantes . ", Procedencia: " . $procedencia. "\n");
fclose($archivo);

// Redirigir al usuario a una página de confirmación
header("Location: gynkana1.html");
exit();
?>