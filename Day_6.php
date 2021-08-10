<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $count = 1;
  $input = readline();
  while((int)($input/10) != 0){
      $input = (int)($input/10);
      $count++;
  }
  echo $count;
?>
