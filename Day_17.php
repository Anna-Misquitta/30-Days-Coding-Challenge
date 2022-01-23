<?php
  /* Read input from STDIN. Print your output to STDOUT*/

  // Find pairs
  
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  $flag = "False";
  while($f = fgets(STDIN)){
    if($i > 0 && $i < 2){
      $input_one = explode(" ",trim($f));
    }else if($i == 0){
      $len = trim($f);
    }else{
      $input_two = trim($f);
    }
    $i++;
  }
  for($i = 0; $i < $len; $i++){
    for($j = 0; $j < $len; $j++){
      if($i != $j){
        $sum = $input_one[$i] + $input_one[$j];
        if($sum == $input_two){
          $flag = "True";
          break;
        }
      }
    }
  }
  echo $flag;
?>
