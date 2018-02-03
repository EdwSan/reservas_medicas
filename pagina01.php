<?php
// pagina1.php

session_start();

echo 'Bienvenido a la página #1';

$_SESSION['color']  = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['instante']   = time();

// Funciona si la cookie de sesión fue aceptada
echo '<br /><a href="pagina02.php">página 2</a>';

// O quizás pasar el id de sesión, si fuera necesario
echo '<br /><a href="pagina02.php?' . SID . '">página 2</a>';
?>
