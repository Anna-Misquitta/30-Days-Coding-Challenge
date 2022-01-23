<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $num = readline();
  $largest_digit = 0;
  for($i = 0; $i < strlen($num); $i++){
    $largest_digit = ($largest_digit > $num[$i])?$largest_digit:$num[$i];
  }
  echo $largest_digit;
?>
