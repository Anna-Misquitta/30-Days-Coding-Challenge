<?php
  /* Read input from STDIN. Print your output to STDOUT*/

  // Calculate power using Recursion

  $fp = fopen("php://stdin", "r");
  //Write code here
  $input = explode(" ",trim(readline()));
  $output = 1;
  for($i = 0; $i < $input[1]; $i++){
    $output *= $input[0];
  }
  print_r($output);
?>
