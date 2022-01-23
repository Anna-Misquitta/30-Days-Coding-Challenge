<?php
  /* Read input from STDIN. Print your output to STDOUT*/

  // Multiplication between odd and even
  
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  while($f= fgets(STDIN)){
    if($i > 0){
      $inputArr = explode(" ",$f);
    }
    $i++;
  }
  $even_number = $odd_number = 0;
  for($i = 0; $i < count($inputArr); $i++){
    if($inputArr[$i] % 2 == 0){
      $even_number += $inputArr[$i];
    }else{
      $odd_number += $inputArr[$i];
    }
  }
  $final_output = $even_number * $odd_number;
  echo $final_output;
?>