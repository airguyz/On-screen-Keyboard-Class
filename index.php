<?php
include 'keyboard.class.php';
//Initiate the class
$keyboard = new Keyboard();
$sentence = 'find the optimum path for this sentence';
$output = $keyboard->findOptimumPath( $sentence );
echo $output;
?>
