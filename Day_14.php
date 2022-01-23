<?php
  /* Read input from STDIN. Print your output to STDOUT*/

  // Lets make a dictionary order
  
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  $input_one = [];
  while($f = fgets(STDIN)){
    if($i > 0){
      array_push($input_one,trim($f));
    }else if($i == 0){
      $len = explode(" ",trim($f));
    }
    $i++;
  }
  sort($input_one);
  print_r(implode("\n",$input_one));
?>
