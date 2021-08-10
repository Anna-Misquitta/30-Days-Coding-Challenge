<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  while($f = fgets(STDIN)){
    if($i > 0){
      $input = explode(" ",trim($f));
    }
    $i++;
  }
  $key = array_search(max($input),$input);
  unset($input[$key]);
  echo max($input);
?>
