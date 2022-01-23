<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  while($f = fgets(STDIN)){
    if($i > 0){
      $inputArr = explode(" ",$f);
    }
    $i++;
  }
  $max_value = max($inputArr);
  $min_value = min($inputArr);
  $multiplication = $max_value*$min_value;
  echo $multiplication;
?>