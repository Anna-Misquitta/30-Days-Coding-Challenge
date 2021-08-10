<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  while($f = fgets(STDIN)){
    $input[$i] = trim($f);
    $i++;
  }
  $count = 0;
  for($i = $input[0]; $i <= $input[1]; $i++){
    $flag = 0;
    if($i == 1){
      $flag = 1;
    }
    for($j = 2; $j <= sqrt($i); $j++){
      if($i % $j == 0){
        $flag = 1;
        break;
      }
    }  
    if($flag == 0 || $i == 2){
      $count++;
    }
  }
  echo $count;
?>
