<?php
  /* Read input from STDIN. Print your output to STDOUT*/

  // Square making

  $fp = fopen("php://stdin", "r");
  //Write code here
  $rows = $cols = 5;
  for($i = 0; $i < $rows; $i++){
    $temp = "";
    for($j = 0; $j < $cols; $j++){
      $temp .= "* ";
    }
    echo trim($temp)."\n";
  }
?>