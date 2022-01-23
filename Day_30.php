<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  while($f = fgets(STDIN)){
    if($i > 0){
      $input[$i] = explode(" ",$f);
    }
    $i++;
  }
  $sum_array =[];
  for($i = 1; $i <= count($input); $i++){
    $sum_array[$i] = array_sum($input[$i]);
  }
  if(count(array_unique($sum_array)) == 1){
    echo "Equal";
  }else{
    $key = array_search(max($sum_array),$sum_array);
    echo "Row ".$key;
  }
?>
