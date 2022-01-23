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
  $flag = "True";
  sort($input);
  $num = $input[0];
  for($i = 1; $i < count($input); $i++){
    if($num+$i != $input[$i]){
      $flag = "False";
      break;
    }
  }
  echo $flag;
?>
