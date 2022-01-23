<?php
  /* Read input from STDIN. Print your output to STDOUT*/

  // GCD of two numbers

  $fp = fopen("php://stdin", "r");
  //Write code here
  $input = explode(" ",trim(readline()));
  $output = 1;
  for($i = $input[1]; $i > 1; $i--){
    if($input[0] % $i == 0 && $input[1] % $i == 0){
      $output = $i;
      break;
    }
  }
  print_r($output);
?>
