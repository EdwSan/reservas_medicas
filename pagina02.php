<?php
// pagina2.php

session_start();

echo 'Bienvenido a la página #2<br />';

$vcolor = $_SESSION['color']; 
$vanimal = $_SESSION['animal']; 
$vfecha = date('Y m d H:i:s', $_SESSION['instante']); 

echo $vcolor."<br>";  // verde
echo $vanimal."<br>"; // gato
echo $vfecha."<br>";

$_SESSION['color2'] = $vcolor;  // verde
$_SESSION['animal2'] = $vanimal; // gato
$_SESSION['fecha'] = $vfecha; // gato


// Puede ser conveniente usar el SID aquí, como hicimos en pagina1.php
echo '<br /><a href="pagina03.php">página 3</a>';
?>
