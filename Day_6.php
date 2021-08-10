<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $count = 1;
  $input = readline();
  $length = strlen($input);
  for($i = 0;$i <= $length; $i++){
    $temp = (int)($input/10);
    if($temp != 0){
      $input = $temp;
      $count++;
    }
  }
  echo $count;
?>
