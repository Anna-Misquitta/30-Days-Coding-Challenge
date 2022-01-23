<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $num = readline();
  $sum_of_even_nos = $sum_of_odd_nos = 0;
  for($i = 0; $i < strlen($num); $i++){
    if($num[$i] % 2 == 0){
      $sum_of_even_nos += $num[$i];
    }else{
      $sum_of_odd_nos += $num[$i];
    }
  }
  echo ($sum_of_even_nos > $sum_of_odd_nos)?($sum_of_even_nos-$sum_of_odd_nos):($sum_of_odd_nos-$sum_of_even_nos);
?>
