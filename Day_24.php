<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  while($f = fgets(STDIN)){
    if($i > 0){
      $input = explode(" ",$f);
    }
    $i++;
  }
  $even_average = $odd_average = $count_of_even_nos = $count_of_odd_nos = 0;
  for($i = 0; $i < count($input); $i++){
    if($input[$i] % 2 == 0){
      $even_average += $input[$i];
      $count_of_even_nos++;
    }else{
      $odd_average += $input[$i];
      $count_of_odd_nos++;
    }
  }
  $even_average = ($count_of_even_nos > 0)?round($even_average/$count_of_even_nos):0;
  $odd_average = ($count_of_odd_nos > 0)?round($odd_average/$count_of_odd_nos):0;
  $sum_of_averages = $even_average + $odd_average;
  echo $sum_of_averages;
  
?>
