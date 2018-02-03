<?php
// pagina3.php

session_start();

echo 'Bienvenido a la página #3<br />';

$vcolor = $_SESSION['color2']; 
$vanimal = $_SESSION['animal2']; 
$vfecha = $_SESSION['fecha']); 

echo $vcolor."<br>";  // verde
echo $vanimal."<br>"; // gato
echo $vfecha."<br>";

// Puede ser conveniente usar el SID aquí, como hicimos en pagina1.php
echo '<br /><a href="pagina01.php">página 1</a>';

?>
