<?php
  /* Read input from STDIN. Print your output to STDOUT*/

  // Binary To Decimal
  
  $fp = fopen("php://stdin", "r");
  //Write code here
  $binary_number = readline();
  $num = 0;
  for($i = 0; $i < strlen($binary_number); $i++ ){
    $num += $binary_number[$i] * pow(2,strlen($binary_number)-$i - 1);
  }
  echo $num;
?>