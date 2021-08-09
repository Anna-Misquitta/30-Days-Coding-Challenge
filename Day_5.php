<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $number = readline();
  $factorial = 1;
  for($i = 1; $i <= $number; $i++){
    $factorial *= $i;
  }
  echo $factorial;
?>
