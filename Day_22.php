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
  $even_number = 0;
  $odd_numer = 0;
  for($i = 0;$i < count($inputArr); $i++){
    if($i % 2 == 0){
        $even_number += $inputArr[$i];
    }else{
        $odd_numer += $inputArr[$i];
    }
  }
  if($even_number > $odd_numer){
    echo $even_number - $odd_numer;
  }else{
    echo $odd_numer - $even_number;
  }
?>