<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $input = readline();
  if(is_numeric($input) && (int) $input == $input){
    echo "This input is of type Integer.";
  }else if(is_numeric($input) && (float) $input == $input){
    echo "This input is of type Float.";
  }else{
    echo "This input is of type string.";
  }
?>
